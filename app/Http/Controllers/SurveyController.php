<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SurveyController extends Controller
{
    public function index(Request  $request)
    {
        if ($request->ajax()) {
            $data = Survey::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('surveys.edit', $data) . '" class="edit btn btn-primary btn-sm"><i class="fa fa-pen"></i> تعديل</a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i> حذف</a>';
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

    public function edit(Survey $survey)
    {
        $sections=Section::all();
        return view("surveys.edit",compact('survey','sections'));
    }

    public function update(Request $request, Survey $survey)
    {
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

}
