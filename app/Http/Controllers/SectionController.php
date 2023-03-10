<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SectionController extends Controller
{

    public function index(Request  $request)
    {
        abort_if(Gate::none(['administrator','hr']), 403);

        if ($request->ajax()) {
            $data = Section::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('sections.edit', $data) . '" class="edit btn  btn-icon btn-light-primary me-2 mb-2 py-3"><i class="fa fa-pen"></i> </a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn  btn-icon btn-light-danger me-2 mb-2 py-3"><i class="fa fa-trash"></i> </a>';
                    return $actionBtn;
                })
                ->rawColumns([ 'action'])
                ->make(true);
        }

        return  view('sections.index');
    }

    public  function create(){

        return view("sections.create");
    }

    public  function  store(Request $request){
        abort_if(Gate::none(['administrator','hr']), 403);

        $validator = Validator::make($request->all(), [
            'title'=>"required",
            'question.*'=>"required",
            'category'=>'required'

        ],[
            'question.*.required'=>'يوجد حقول في قسم الأسئلة  فارغة'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }




        $section=Section::create($request->only(['title','category']));


        $questions = [];
        if ($request->question) {
            foreach ($request->question  as $key => $value) {
                $questions[$key]['name'] = $request->question[$key];

            }

            $section->questions()->createMany($questions);


        }


        if ($section){
            return response()->json(['success' => true, 'message' => "تمت العملية بنجاح"]);
        }
        return response()->json(['success' => false, 'message' => " لم تتم العملية"]);


    }

    public function edit(Section $section)
    {
        abort_if(Gate::none(['administrator','hr']), 403);

        return view("sections.edit",compact('section'));
    }

    public function update(Request $request, Section $section )
    {
        abort_if(Gate::none(['administrator','hr']), 403);

        $validator = Validator::make($request->all(), [
            'title'=>"required",
            'question.*'=>"required",
            'category'=>'required'

        ],[
            'question.*.required'=>'يوجد حقول في قسم الأسئلة  فارغة'
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $section->update(["title"=>$request->title,"category"=>$request->category]);

        $questions = [];
        if ($request->question) {
            foreach ($request->question  as $key => $value) {
                $questions[$key]['name'] = $request->question[$key];

            }


            $section->questions()->delete();
            $section->questions()->createMany($questions);


        }


        if ($section){
            return response()->json(['success' => true, 'message' => "تمت العملية بنجاح"]);
        }
        return response()->json(['success' => false, 'message' => " لم تتم العملية"]);


    }


    public function  destroy(Section $section){
        abort_if(Gate::none(['administrator']), 403);

        $section->delete();
        return response()->json(['status' => 'success']);
    }
}
