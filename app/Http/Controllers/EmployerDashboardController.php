<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client;
use App\Employer;

class EmployerDashboardController extends Controller
{
    //

    public function index()
    {
        $user=Auth::user()->id;
        $employer=Employer::where('user_id',$user)->first();
        $clients= Client::join('users', 'users.id', '=', 'clients.user_id')->where('referal_code',$employer->unique_id)->get();
 
         return view('frontend.user.dashboard.employer.index',compact('user','clients'));
    }

    public function upload_document()
    {
        return view('frontend.user.dashboard.employer.required_document');
    }
}
