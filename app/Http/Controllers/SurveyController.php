<?php

namespace App\Http\Controllers;

use App\Models\CurrantSurvey;
use App\Models\Point;
use App\Models\Section;
use App\Models\SectionSurvey;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SurveyController extends Controller
{
    public function index(Request  $request)
    {
        abort_if(Gate::none(['administrator','hr']), 403);


        if ($request->ajax()) {
            $data = Survey::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('count_sections', function ($data) {
                    return $data->sections->count("id");

                })

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('surveys.edit', $data) . '" class="edit btn btn-icon   btn-light-primary  me-2 mb-2 py-3"><i class="fa fa-pen"></i> </a>
                   <a href="'.route('surveys.show',['survey'=>$data]).'" class="btn btn-icon   btn-light-info  me-2 mb-2 py-3"><i class="fa fa-search"></i> </a>
                <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-icon   btn-light-danger  me-2 mb-2 py-3"><i class="fa fa-trash"></i> </a>';
                    return $actionBtn;
                })
                ->rawColumns([ 'action'])
                ->make(true);
        }

        return  view('surveys.index');
    }

    public  function create(){
        $sections=Section::all();

        return view("surveys.create",compact('sections'));

    }

    public  function  store(Request $request){
        abort_if(Gate::none(['administrator','hr']), 403);

        $validator = Validator::make($request->all(), [
            'title'=>"required",
            'description'=>"required",
            'sections.*'=>"required"
        ]);

        $data=$request->only(['title','description']);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $surveys=Survey::create($data);

        $sections = [];
        if ($request->sections) {

            foreach ($request->sections as $key => $value) {
                $sections[$key]['section_id'] = $request->sections[$key];

            }

                $surveys->sections()->sync($sections);


        }




        if ($surveys){
            return response()->json(['success' => true, 'message' => "تمت العملية بنجاح"]);
        }
        return response()->json(['success' => false, 'message' => " لم تتم العملية"]);

//        return redirect()->back()->with('success','تم تحديث البيانات في نجاح');

    }


    public function show(Survey $survey){
        abort_if(Gate::none(['administrator','hr']), 403);
        $points=Point::all();



        return view('surveys.show',compact('points','survey'));

    }

    public function edit(Survey $survey)
    {
        abort_if(Gate::none(['administrator','hr']), 403);
        $sections=Section::all();
        return view("surveys.edit",compact('survey','sections'));
    }

    public function update(Request $request, Survey $survey)
    {
        abort_if(Gate::none(['administrator','hr']), 403);
        $validator = Validator::make($request->all(), [
            'title'=>"required",
            'sections.*'=>"required"

        ],[
            'sections.*.required'=>'يوجد حقول في قسم الأسئلة  فارغة'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $survey_check=$survey->update($request->only('title','description'));

        $sections = [];
        if ($request->sections) {

            foreach ($request->sections as $key => $value) {
                $sections[$key]['section_id'] = $request->sections[$key];

            }


            $survey->sections()->sync($sections);



        }


        if ($survey_check){
            return response()->json(['success' => true, 'message' => "تمت العملية بنجاح"]);
        }
        return response()->json(['success' => false, 'message' => " لم تتم العملية"]);


    }

    public function  destroy(Survey $survey){
        abort_if(Gate::none(['administrator']), 403);
        $currant=CurrantSurvey::firstWhere('survey_id',$survey->id)->exists();

        if(!$currant){
        $survey->delete();
        return response()->json(['status' => 'success']);

        }
         return response()->json(['status' => 'error','message'=>'خطأّّ لايمكن حذف النموذج لأنه مفعل مسبقا']);


    }



}
