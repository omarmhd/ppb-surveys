<?php

namespace App\Http\Controllers;

use App\Models\ActivatedSurvey;
use App\Models\CurrantSurvey;
use App\Models\Point;
use App\Models\project\utilization\Order;
use App\Models\Result;
use App\Models\SectionSurvey;
use App\Models\Survey;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ActivatedSurveyController extends Controller
{

    public function dataTableSearch($date_from="",$date_to="",$employee_id="",$evaluator_id="",$status=""){

        if (Gate::allows("evaluator") ) {
            if(($date_from and $date_to) or $employee_id  or $evaluator_id) {


                $data = CurrantSurvey::where(['evaluator_id' => auth()->user()->id])->where("status",$status)->whereBetween('created_at', [$date_from, $date_to])->latest()->get();
            }else{
                if($status!=""){
                    $data = CurrantSurvey::where(['evaluator_id' => auth()->user()->id])->where("status", $status)->latest()->get();

                }else {

                    $data = CurrantSurvey::where(['evaluator_id' => auth()->user()->id])->latest()->get();
                }
            }




        } else {

            if(($date_from and $date_to) or $employee_id  or $evaluator_id) {

                $data = CurrantSurvey::whereBetween('created_at', [$date_from, $date_to])->orwhere('employee_id',$employee_id)->orwhere('evaluator_id',$evaluator_id)->orwhere("status",$status)->latest()->get();
            }else{

                if($status!=""){
                    $data = CurrantSurvey::where('status',$status)->latest()->get();

                }else{
                    $data = CurrantSurvey::latest()->get();
                }




            }




}

        return $data;
    }

    public function index(Request $request)
    {


        $evaluators = User::where("role", 'evaluator')->get();
        $employees = User::where("role", 'employee')->get();


        if ($request->ajax()) {




            $data=$this->dataTableSearch($request->date_from,$request->date_to,$request->employee_id,$request->evaluator_id);



            return DataTables::of($data)
                ->addIndexColumn()

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
                    $sum_result = $data->results->sum("score");
                    $prerc = ($sum_result / 100) * 100;

                    return $prerc;
                })->addColumn('action', function ($data) {

                    $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn  btn-icon btn-light-dark me-2 mb-2 py-3"><i class="fa fa-poll"></i>  </a>
                      <a href="' . route('activated-surveys.edit', $data) . '" data-id="' . $data->id . '"   class="btn  btn-icon   btn-light-primary  me-2 mb-2 py-3"><i class="fa fa-pen"></i></a>
                        <a href="' . route("approval.show", $data->id) . '" data-id="' . $data->id . '"   class="btn btn btn-icon  btn-light-info  me-2 mb-2 py-3"><i class="fa fa-ellipsis-h"></i></a>
                     <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon  btn-light-danger  me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>

                     ';
                    if (Gate::allows("evaluator")) {
                        $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn btn-primary btn-sm"><i class="fa fa-poll"></i>  تقيم</a>';
                        $data = CurrantSurvey::where(['evaluator_id' => auth()->user()->id])->latest()->get();
                    } else {
                        $data = CurrantSurvey::latest()->get();

                    }

                    return $actionBtn;
                })
                ->rawColumns(['action', 'status', 'is_open', 'is_evaluated', 'employee_id', 'survey_id'])
                ->make(true);
        }

        return view('surveys.activated-surveys.index', compact('evaluators', 'employees'));
    }

    public function newIndex(Request $request)
    {


        $evaluators = User::where("role", 'evaluator')->get();
        $employees = User::where("role", 'employee')->get();

        if ($request->ajax()) {

            $data=$this->dataTableSearch($request->date_from,$request->date_to,$request->employee_id,$request->evaluator_id,"0");

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->status == "private") {
                        $actionBtn = '<i class="fa  fa-eye-slash"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-eye"></i>';

                    }
                    return $actionBtn;
                })
                ->addColumn('is_open', function ($data) {
                    if ($data->is_open == 0) {
                        $actionBtn = '<span style="background: #1a202c;color: white">مغلق</span>';
                    } else {
                        $actionBtn = '<span style="background: #50CD89;color: white">مفتوح</span>';

                    }
                    return $actionBtn;
                })->addColumn('is_evaluated', function ($data) {
                    if ($data->status == 1) {
                        $actionBtn = '<i class="fa fa-check"></i>';
                    } else {

                        $actionBtn = '<i class="fa fa-times"></i>';

                    }
                    return $actionBtn;
                })->addColumn('action', function ($data) {

                    $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn  btn-icon btn-light-dark me-2 mb-2 py-3"><i class="fa fa-poll"></i>  </a>
                      <a href="' . route('activated-surveys.edit', $data) . '" data-id="' . $data->id . '"   class="btn  btn-icon   btn-light-primary  me-2 mb-2 py-3"><i class="fa fa-pen"></i></a>
                        <a href="' . route("approval.show", $data->id) . '" data-id="' . $data->id . '"   class="btn btn btn-icon  btn-light-info  me-2 mb-2 py-3"><i class="fa fa-ellipsis-h"></i></a>
                     <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon  btn-light-danger  me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>

                     ';
                    if (Gate::allows("evaluator")) {
                        $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn btn-primary btn-sm"><i class="fa fa-poll"></i>  تقيم</a>';
                    }


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
                    $sum_result = $data->results->sum("score");
                    $prerc = ($sum_result / 100) * 100;

                    return $prerc;
                })
                ->rawColumns(['action', 'is_open', 'is_evaluated', 'employee_id', 'survey_id'])
                ->make(true);
        }

        return view('surveys.activated-surveys.new.index', compact('evaluators', 'employees'));

    }

    public function acceptedIndex(Request $request)
    {


        $evaluators = User::where("role", 'evaluator')->get();
        $employees = User::where("role", 'employee')->get();
        if ($request->ajax()) {

            $data=$this->dataTableSearch($request->date_from,$request->date_to,$request->employee_id,$request->evaluator_id,"2");

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->status == "private") {
                        $actionBtn = '<i class="fa  fa-eye-slash"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-eye"></i>';

                    }
                    return $actionBtn;
                })
                ->addColumn('is_open', function ($data) {
                    if ($data->is_open == 0) {
                        $actionBtn = '<span style="background: #1a202c;color: white">مغلق</span>';
                    } else {
                        $actionBtn = '<span style="background: #50CD89;color: white">مفتوح</span>';

                    }
                    return $actionBtn;
                })->addColumn('is_evaluated', function ($data) {
                    if ($data->is_evaluated == 1) {
                        $actionBtn = '<i class="fa fa-check"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-times"></i>';

                    }
                    return $actionBtn;
                })->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn  btn-icon btn-light-dark me-2 mb-2 py-3"><i class="fa fa-poll"></i>  </a>
                      <a href="' . route('activated-surveys.edit', $data) . '" data-id="' . $data->id . '"   class="btn  btn-icon   btn-light-primary  me-2 mb-2 py-3"><i class="fa fa-pen"></i></a>
                        <a href="' . route("approval.show", $data->id) . '" data-id="' . $data->id . '"   class="btn btn btn-icon  btn-light-info  me-2 mb-2 py-3"><i class="fa fa-ellipsis-h"></i></a>
                     <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon  btn-light-danger  me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>

                     ';
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
                    $sum_result = $data->results->sum("score");
                    $prerc = ($sum_result / 100) * 100;

                    return $prerc;
                })
                ->rawColumns(['action', 'status', 'is_open', 'is_evaluated', 'employee_id', 'survey_id'])
                ->make(true);
        }

        return view('surveys.activated-surveys.accepted.index', compact('evaluators', 'employees'));

    }

    public function evaluatedIndex(Request $request)
    {


        $evaluators = User::where("role", 'evaluator')->get();
        $employees = User::where("role", 'employee')->get();
        if ($request->ajax()) {
            $data=$this->dataTableSearch($request->date_from,$request->date_to,$request->employee_id,$request->evaluator_id,"1");



            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->status == "private") {
                        $actionBtn = '<i class="fa  fa-eye-slash"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-eye"></i>';

                    }
                    return $actionBtn;
                })
                ->addColumn('is_open', function ($data) {
                    if ($data->is_open == 0) {
                        $actionBtn = '<span style="background: #1a202c;color: white">مغلق</span>';
                    } else {
                        $actionBtn = '<span style="background: #50CD89;color: white">مفتوح</span>';

                    }
                    return $actionBtn;
                })->addColumn('is_evaluated', function ($data) {
                    if ($data->is_evaluated == 1) {
                        $actionBtn = '<i class="fa fa-check"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-times"></i>';

                    }
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
                    $sum_result = $data->results->sum("score");
                    $prerc = ($sum_result / 100) * 100;

                    return $prerc;
                })->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn  btn-icon btn-light-dark me-2 mb-2 py-3"><i class="fa fa-poll"></i>  </a>
                      <a href="' . route('activated-surveys.edit', $data) . '" data-id="' . $data->id . '"   class="btn  btn-icon   btn-light-primary  me-2 mb-2 py-3"><i class="fa fa-pen"></i></a>
                        <a href="' . route("approval.show", $data->id) . '" data-id="' . $data->id . '"   class="btn btn btn-icon  btn-light-info  me-2 mb-2 py-3"><i class="fa fa-ellipsis-h"></i></a>
                     <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon  btn-light-danger  me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>

                     ';
                    if (Gate::allows("evaluator")) {

                        $actionBtn = "";
                    }


                    return $actionBtn;
                })
                ->rawColumns(['status', 'is_open', 'is_evaluated', 'employee_id', 'survey_id', 'action'])
                ->make(true);
        }

        return view('surveys.activated-surveys.evaluated.index', compact('evaluators', 'employees'));

    }

    public function approvalIndex(Request $request)
    {
        $evaluators = User::where("role", 'evaluator')->get();
        $employees = User::where("role", 'employee')->get();

        if ($request->ajax()) {
            $data=$this->dataTableSearch($request->date_from,$request->date_to,$request->employee_id,$request->evaluator_id,"3");

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->status == "private") {
                        $actionBtn = '<i class="fa  fa-eye-slash"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-eye"></i>';

                    }
                    return $actionBtn;
                })
                ->addColumn('is_open', function ($data) {
                    if ($data->is_open == 0) {
                        $actionBtn = '<span style="background: #1a202c;color: white">مغلق</span>';
                    } else {
                        $actionBtn = '<span style="background: #50CD89;color: white">مفتوح</span>';

                    }
                    return $actionBtn;
                })->addColumn('is_evaluated', function ($data) {
                    if ($data->is_evaluated == 1) {
                        $actionBtn = '<i class="fa fa-check"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-times"></i>';

                    }
                    return $actionBtn;
                })->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn  btn-icon btn-light-dark me-2 mb-2 py-3"><i class="fa fa-poll"></i>  </a>
                      <a href="' . route('activated-surveys.edit', $data) . '" data-id="' . $data->id . '"   class="btn  btn-icon   btn-light-primary  me-2 mb-2 py-3"><i class="fa fa-pen"></i></a>
                        <a href="' . route("approval.show", $data->id) . '" data-id="' . $data->id . '"   class="btn btn btn-icon  btn-light-info  me-2 mb-2 py-3"><i class="fa fa-ellipsis-h"></i></a>
                     <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon  btn-light-danger  me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>

                     ';
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
                    $sum_result = $data->results->sum("score");
                    $prerc = ($sum_result / 100) * 100;

                    return $prerc;
                })
                ->rawColumns(['action', 'status', 'is_open', 'is_evaluated', 'employee_id', 'survey_id'])
                ->make(true);
        }

        return view('surveys.activated-surveys.approval.index', compact('evaluators', 'employees'));

    }

    public function returnIndex(Request $request)
    {

        $evaluators = User::where("role", 'evaluator')->get();
        $employees = User::where("role", 'employee')->get();

        if ($request->ajax()) {

            $data=$this->dataTableSearch($request->date_from,$request->date_to,$request->employee_id,$request->evaluator_id,"4");

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    if ($data->status == "private") {
                        $actionBtn = '<i class="fa  fa-eye-slash"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-eye"></i>';

                    }
                    return $actionBtn;
                })
                ->addColumn('is_open', function ($data) {
                    if ($data->is_open == 0) {
                        $actionBtn = '<span style="background: #1a202c;color: white">مغلق</span>';
                    } else {
                        $actionBtn = '<span style="background: #50CD89;color: white">مفتوح</span>';

                    }
                    return $actionBtn;
                })->addColumn('is_evaluated', function ($data) {
                    if ($data->is_evaluated == 1) {
                        $actionBtn = '<i class="fa fa-check"></i>';
                    } else {
                        $actionBtn = '<i class="fa fa-times"></i>';

                    }
                    return $actionBtn;
                })->addColumn('action', function ($data) {

                    $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn  btn-icon btn-light-dark me-2 mb-2 py-3"><i class="fa fa-poll"></i>  </a>
                      <a href="' . route('activated-surveys.edit', $data) . '" data-id="' . $data->id . '"   class="btn  btn-icon   btn-light-primary  me-2 mb-2 py-3"><i class="fa fa-pen"></i></a>
                        <a href="' . route("approval.show", $data->id) . '" data-id="' . $data->id . '"   class="btn btn btn-icon  btn-light-info  me-2 mb-2 py-3"><i class="fa fa-ellipsis-h"></i></a>
                     <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon  btn-light-danger  me-2 mb-2 py-3"><i class="fa fa-trash"></i></a>

                     ';

                    if (Gate::allows("evaluator")) {

                        $actionBtn = '<a href="' . route('activated-surveys.show', $data) . '" class="edit btn btn-primary btn-sm"><i class="fa fa-poll"></i>  تقيم</a>';
                    }
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
                    $sum_result = $data->results->sum("score");
                    $prerc = ($sum_result / 100) * 100;

                    return $prerc;
                })
                ->rawColumns(['action', 'status', 'is_open', 'is_evaluated', 'employee_id', 'survey_id'])
                ->make(true);
        }

        return view('surveys.activated-surveys.return.index', compact('evaluators', 'employees'));

    }

    public function indexApprovalPage($id)
    {


        $survey = CurrantSurvey::findorfail($id);

        return view("surveys.activated-surveys.approval", compact('survey'));


    }

    public function create()
    {

        $users = User::all();
        $surveys = Survey::all();
        return view("surveys.activated-surveys.create", compact('users', 'surveys'));

    }


    public function show($id)
    {
        $survey = CurrantSurvey::findorfail($id);

        if ($survey->is_evaluated == 1) {
            return redirect()->back()->with('error', 'نأسف! لا يمكن التقيم مرة أخرى ');
        }
        $survey_id = $survey->survey_id;
        $sections = SectionSurvey::with(['results' => function ($q) use ($id) {
            $q->where('currant_survey_id', $id);
        }])->where('survey_id', $survey_id)->get();

        $points = Point::all();

//        $section=SectionSurvey::with(['results', function($q) use ($id){
//            return $q->where('currant_survey_id',$id);
//        }])->get();

//        dd($section);


//        $sectionSurvey=SectionSurvey::where("survey_id",$currantSurvey->survey_id)->get();

        return view('surveys.activated-surveys.show', compact('sections', 'survey', 'points'));

    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'survey_id' => "required",
            "evaluators" => "required|exists:users,id",
            "employees" => "required|exists:users,id",
            "evaluators.*" => "required|exists:users,id|numeric",
            "employees.*" => "required|exists:users,id",
            'status_show' => "required",
            'is_open' => "required"


        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        foreach ($request->evaluators as $key => $evaluator) {

            foreach ($request->employees as $key => $employees) {

                $currant = CurrantSurvey::create([
                    'survey_id' => $request->survey_id,
                    'employee_id' => $employees,
                    'evaluator_id' => $evaluator,
                    'version' => '1',
                    'status_show' => $request->status_show,
                    'is_open' => $request->is_open,
                    'status' => '0'

                ]);

                $sectionsSurvey = SectionSurvey::where('survey_id', $request->survey_id,)->get();

                $questions = DB::table('section_surveys')->join('questions', 'section_surveys.section_id', '=', 'questions.section_id')->select('*', 'section_surveys.id as section_survey_id')->where('survey_id', $request->survey_id)->get();

                foreach ($questions as $question) {


                    Result::create([
                        "currant_survey_id" => $currant->id,
                        'question_id' => $question->id,
                        'section_survey_id' => $question->section_survey_id,
                        'section_title' => '',
                        'question_title' => $question->name,
                        'score' => "0"

                    ]);

                }

            }

        }

        return response()->json(['success' => true, 'message' => "تم  تفعيل  النموذج"]);


    }


    public function edit(CurrantSurvey $activated_survey)
    {


        $surveys = Survey::all();
        $users = User::all();
        return view('surveys.activated-surveys.edit', compact('activated_survey', 'users', 'surveys'));


    }


    public function update(Request $request, CurrantSurvey $activated_survey)
    {

        $validator = Validator::make($request->all(), [
            'employee_id' => "required",
            'evaluator_id' => "required",
            'status_show' => "required",
            'is_open' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $activated_survey->update($request->only(['employee_id', 'evaluator_id', 'status_show', 'is_open']));


        return response()->json(['success' => true, 'message' => "تم حفظ التعديلات"]);


    }

    public function evaluation(Request $request, CurrantSurvey $activated_survey)
    {


        $cont_results = count($request->results ?? [""]);

        if ($activated_survey->status == "1" or $activated_survey->status=="3" or $activated_survey->status=="2" ) {
            return response()->json(['success' => "error", 'message' => "نأسف!تم التقبم مسبقا لا يمكن التقيم مرة أخرى"]);
        }

        if ($cont_results !== $activated_survey->results->count() || $cont_results == 0) {
            return response()->json(['success' => "error", 'message' => " التقيم غير مكتمل"]);

        }

        $total_score = 0;
        foreach ($request->results as $key => $value) {

            Result::where('id', $key)->update(['score' => $value]);
            $total_score = $total_score + $value;
        }

        $activated_survey->update(['status' => "1", 'evaluator_notes' => $request->evaluator_notes, 'score' => $total_score]);

        return response()->json(['success' => true, 'message' => "تم حفظ التقيم"]);


    }


    public function updateStatus(Request $request, $type = "", $id)
    {


        if (!in_array($type, ['1', '2', '3', '4'])) {
            return back()->with("error", "خطأ في البيانات المدخلة");
        }
        if ($type == '2' and $request->ajax()) {
            $CurrantSurvey = CurrantSurvey::where(["id" => $id])->update(["status" => $type, 'note_employee' => $request->note]);
            return response()->json(['success' => true]);

        }
        $CurrantSurvey = CurrantSurvey::where(["id" => $id])->update(["status" => $type]);
        return redirect()->route("activated-surveys.index")->with("success", "تم التحديث بنجاح");


    }


    public function destroy(CurrantSurvey $activated_survey)
    {
        $activated_survey->delete();
        return response()->json(['status' => 'success']);
    }
}
