<?php

namespace App\Http\Controllers;

use App\Models\ActivatedSurvey;
use App\Models\CurrantSurvey;
use App\Models\Employee;
use App\Models\Point;
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

    public  function index(Request$request){

        if ($request->ajax()) {
            $data = CurrantSurvey::latest()->get();
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
                    $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn btn-primary "><i class="fa fa-pen"></i></a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-danger "><i class="fa fa-trash"></i></a>';
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

                ->rawColumns(['action','status','is_open','is_evaluated','employee_id','survey_id'])
                ->make(true);
        }

        return  view('surveys.activated-surveys.index');
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


        $survey=CurrantSurvey::find($id);
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
                        'score'=>"2"

                    ]);

                }

            }

        }

















    }
    public function  update(Request $request,CurrantSurvey $activated_survey){

        $validator = Validator::make($request->all(), [
            'results[].*.'=>'required',
            'notes'=>"required",

        ],[
            'results.*.required'=>'أجب على كافة المعاير'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }


        foreach ($request->results as $key => $value) {

            Result::where('id',$key)->update(['score'=>$value]);

        };

        $activated_survey->update(['is_evaluated'=>"1",'notes'=>$request->notes]);



        return response()->json(['success' => true, 'message' => "تم حفظ التقيم"]);
























    }
    public function  destroy(ActivatedSurvey $activatedSurvey){
        $activatedSurvey->delete();
        return response()->json(['status' => 'success']);
    }
}
