<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use http\Encoding\Stream\Enbrotli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request  $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()

                ->addColumn('action', function ($data) {
                    $actionBtn = '<a href="' . route('users.edit', $data) . '" class="edit btn btn-primary "><i class="fa fa-pen"></i></a> <a href="javascript:void(0)" data-id="' . $data->id . '"   class="delete btn btn-danger "><i class="fa fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns([ 'action'])
                ->make(true);
        }

        return  view('users.index');
    }



    public  function create(){

        $user =new User();
        return view("users.create",compact('user'));
    }

    public  function  store(Request $request){


        $validator = Validator::make($request->all(), [
            'name'=>"required|unique:users,name",
            'full_name'=>'required',
            'email'=>"required|unique:users,email",
            'role'=>'required|in:employee,evaluator,administrator',
            'password'=>'required|min:4'
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $data=$request->except(['password']);
        $data['password']=Hash::make($request->password);
        $user=User::create($data);

        if ($user){
            return response()->json(['success' => true, 'message' => "تمت العملية بنجاح"]);
        }
            return response()->json(['success' => false, 'message' => " لم تتم العملية"]);


    }


    public function  show($id){

        return view("users.show");
    }

    public  function edit(User $user){




        return view("users.edit",compact('user'));
    }

    public  function  update(Request $request,User $user){

        $validator = Validator::make($request->all(), [
            'name'=>"required|unique:users,name,".$user->id,
            'full_name'=>'required',
            'email'=>"required|unique:users,email,".$user->id,
            'role'=>'required|in:employee,evaluator,administrator',

        ]);


        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }
        $data=$request->except(['password']);

        if ($request->password!==null) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);


        if ($user){
            return response()->json(['success' => true, 'message' => "تمت العملية بنجاح"]);
        }
        return response()->json(['success' => false, 'message' => " لم تتم العملية"]);


    }
    public function  destroy(User $user){
        $user->delete();
        return response()->json(['status' => 'success']);
    }
}
