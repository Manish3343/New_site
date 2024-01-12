<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Employer;
use App\User;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
       $employer=Employer::all();
        return view('backend.employer.employer',compact('employer'));
    }

    public function create($id=null)
    {
        
        $latest_data=null;
        if($id!=null){
        $latest_data=Employer::where('id',$id)->first();
        }
        return view('backend.employer.add_employer',compact('latest_data'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits:10',
            'gender' => 'required|in:male,female',
            'education' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'pswd' => 'required|string|min:8',
            'confirm_pwd' => 'required|string|min:8|same:pswd',
        ]);

        $udata=[
           'name'=>$request->name,
           'email'=>$request->email,
           'user_type'=>'Employer',
           'username'=>$request->email,
           'phone'=>$request->phone,
           'address'=>$request->address,
           'password'=>Hash::make($request->pswd)
        ];
        User::create($udata);
        $latest_user=User::latest()->first();

     $latest=Employer::latest()->first();
     if($latest)
     {
        $ids="EM".($latest->id+1);
     }
     else{
        $ids="EM1";
     }
     $uniqueId=str_replace(' ', '', $request->name).'S'.time();

        $data=[
            'name'=>$request->name,
            'user_id'=>$latest_user->id,
            'email'=>$request->email,
            'username'=>$ids,
            'unique_id'=>$uniqueId,
            'phone'=>$request->phone,
             'gender'=>$request->gender,
            'education'=>$request->education,
            'addres'=>$request->address
        ];

        Employer::create($data);
        return redirect(route('admin.home.employer'))->with('message','Employer Created Successfully !!');
    }

    public function update(Request $request, Employer $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits:10',
            'gender' => 'required|in:male,female',
            'education' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]); 
        
        $id->name=$request->name;
        $id->email=$request->email;
        $id->phone=$request->phone;
        $id->gender=$request->gender;
        $id->education=$request->education;
        $id->addres=$request->address;
        if($request->pswd)
        {
            $id->password=$request->pswd;
        }
        $id->save();
        return redirect(route('admin.home.employer'))->with('message','Employer Updated Successfully !!');
    }

    public function destroy(Employer $id)
    {
        $id->delete();
        return redirect()->back()->with('message','Employer Deleted successfully');
    }
}
