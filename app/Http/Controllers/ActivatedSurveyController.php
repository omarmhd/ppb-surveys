<?php

namespace App\Http\Controllers;

use App\Models\ActivatedSurvey;
use App\Models\CurrantSurvey;
use App\Models\Employee;
use App\Models\Point;
use App\Models\project\utilization\Order;
use App\Models\Result;
use App\Models\Section;
use App\Models\SectionSurvey;
use App\Models\Survey;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ActivatedSurveyController extends Controller
{

    public  function index(Request $request){


        $evaluators=User::where("role",'evaluator')->get();
        $employees=User::where("role",'employee')->get();
        if ($request->ajax()) {


            $data = CurrantSurvey::latest()->get();


            if (($request->date_from && $request->date_to) ||$request->evaluator_id || $request->employee_id ) {

                $data = CurrantSurvey::whereBetween('created_at',[$request->date_from,$request->date_to])->get();


            }
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('status', function ($data) {
                    if($data->status=="private"){
                        $actionBtn = '<i class="fa fa-eye"></i>';
                    }else{
                        $actionBtn = '<i class="fa fa-eye-slash"></i>';

                    }
                    return $actionBtn;
                })
                ->addColumn('is_open', function ($data) {
                    if($data->is_open==0){
                        $actionBtn = '<span style="background: #1a202c;color: white">مغلق</span>';
                    }else{
                        $actionBtn = '<span style="background: #50CD89;color: white">مفتوح</span>';

                    }
                    return $actionBtn;
                })->addColumn('is_evaluated', function ($data) {
                    if($data->is_evaluated==1){
                        $actionBtn = '<i class="fa fa-check"></i>';
                    }else{
                        $actionBtn = '<i class="fa fa-times"></i>';

                    }
                    return $actionBtn;
                })->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn btn-primary btn=sm"><i class="fa fa-poll"></i>  تقيم</a>
  <a href="'.route('activated-surveys.edit',$data).'" data-id="' . $data->id . '"   class="btn btn-info  btn=sm"><i class="fa fa-pen"></i>تعديل</a>
 <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-danger btn=sm"><i class="fa fa-trash"></i>حذف</a>';
                    return $actionBtn;
                })
                ->addColumn('employee_id', function ($data) {

                    return $data->employee->full_name;

                })
                ->addColumn('survey_id', function ($data) {

                    return $data->survey->title;

                })
                ->addColumn('evaluator_id', function ($data) {

                return $data->evaluator->full_name;

                })
                ->addColumn('score', function ($data) {
                    $sum_result=$data->results->sum("score");
                    $prerc=($sum_result/100)*100;

                    return $prerc;
                })

                ->rawColumns(['action','status','is_open','is_evaluated','employee_id','survey_id'])
                ->make(true);
        }

        return  view('surveys.activated-surveys.index',compact('evaluators','employees'));
    }

    public function create(){

        $users=User::all();
        $surveys=Survey::all();
        return view("surveys.activated-surveys.create",compact('users','surveys'));

    }


    public function show($id){
//        $sectionResult=Result::where("currant_survey_id",$id)->get()->groupBy('currant_survey_id','section_surveys_id');

//        $authors = Section::with(['s' => fn($query) => $query->where('title', 'like', 'PHP%')])
//            ->whereHas('books', fn ($query) =>
//            $query->where('title', 'like', 'PHP%')
//            )
//            ->get();



        $survey=CurrantSurvey::findorfail($id);
        if ($survey->is_evaluated==1){
            return  redirect()->back()->with('error','نأسف! لا يمكن التقيم مرة أخرى ');
        }
        $survey_id=$survey->survey_id;
        $sections = SectionSurvey::with(['results' => function($q) use ($id) {
            $q->where('currant_survey_id',$id);
        }])->where('survey_id',$survey_id) ->get();

        $points=Point::all();

//        $section=SectionSurvey::with(['results', function($q) use ($id){
//            return $q->where('currant_survey_id',$id);
//        }])->get();

//        dd($section);



//        $sectionSurvey=SectionSurvey::where("survey_id",$currantSurvey->survey_id)->get();

        return view('surveys.activated-surveys.show',compact('sections','survey','points'));





    }
    public function  store(Request $request){
        $validator = Validator::make($request->all(), [
            'survey_id'=>"required",
            "evaluators"=>"required|exists:users,id",
            "employees"=>"required|exists:users,id",
            "evaluators.*"=>"required|exists:users,id|numeric",
            "employees.*"=>"required|exists:users,id",
            'status'=>"required",
            'is_open'=>"required"


        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        foreach($request->evaluators as $key=>$evaluator){

            foreach($request->employees as $key=>$employees){

                $currant=CurrantSurvey::create([
                    'survey_id'=>$request->survey_id,
                    'employee_id'=>$employees,
                    'evaluator_id'=>$evaluator,
                    'version'=>'1',
                    'status'=>$request->status,
                    'is_open'=>$request->is_open,
                    'is_evaluated'=>'0'

                ]);

                $sectionsSurvey=SectionSurvey::where('survey_id',$request->survey_id,)->get();

                $questions=DB::table('section_surveys')->join('questions','section_surveys.section_id','=','questions.section_id')->select('*','section_surveys.id as section_survey_id')->where('survey_id',$request->survey_id)->get();

                foreach($questions as $question){


                    Result::create([
                        "currant_survey_id"=>$currant->id,
                        'question_id'=>$question->id,
                        'section_survey_id'=>$question->section_survey_id,
                        'section_title'=>'',
                        'question_title'=>$question->name,
                        'score'=>"0"

                    ]);

                }

            }

        }





        return response()->json(['success' => true, 'message' => "تم  تفعيل  النموذج"]);












    }

    public  function edit(CurrantSurvey $activated_survey){

        if ($activated_survey->is_evaluated=="1"){
            return response()->json(['success' => false, 'message' => " خطأ! لايمكن التعديل على  بيانات الموظف الذي تم تقيمه "]);

        }

        $surveys=Survey::all();
        $users=User::all();
        return  view('surveys.activated-surveys.edit',compact('activated_survey','users','surveys'));



    }




    public function  update(Request $request,CurrantSurvey $activated_survey){

        $validator = Validator::make($request->all(), [
            'employee_id'=>"required",
            'evaluator_id'=>"required",
            'status'=>"required",
            'is_open'=>'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $activated_survey->update($request->only(['employee_id','evaluator_id','status','is_open']));




        return response()->json(['success' => true, 'message' => "تم حفظ التعديلات"]);


    }

    public function  evaluation(Request $request,CurrantSurvey $activated_survey){


        $cont_results=count( $request->results??[""]);

        if ($activated_survey->is_evaluated=="1"){
            return response()->json(['success' => "error", 'message' => "نأسف!تم التقبم مسبقا لا يمكن التقيم مرة أخرى"]);

        }
        if ($cont_results!==$activated_survey->results->count() || $cont_results==0){
            return response()->json(['success' => "error", 'message' => "نأسف! التقيم غير مكتمل"]);

        }

        $total_score=0;
        foreach ($request->results as $key => $value) {

            Result::where('id',$key)->update(['score'=>$value]);
            $total_score=$total_score+$value;
        };

        $activated_survey->update(['is_evaluated'=>"1",'notes'=>$request->notes,'score'=>$total_score]);



        return response()->json(['success' => true, 'message' => "تم حفظ التقيم"]);


    }




    public function updateAccepted($id){


        $ff=CurrantSurvey::where(["id"=>$id,"employee_id"=>2])->update(["is_accepted"=>0]);


        return response()->json(['success' => true]);

    }




    public function  destroy(CurrantSurvey $activated_survey){
        $activated_survey->delete();
        return response()->json(['status' => 'success']);
    }
}
