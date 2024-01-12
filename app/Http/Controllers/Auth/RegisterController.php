<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Employer;
use App\Client;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;   
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){
        return route('user.home');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:191'],
            //'captcha_token' => ['required'],
            'username' => ['required', 'string', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            //'captcha_token.required' => __('google captcha is required'),
            'name.required' => __('name is required'),
            'name.max' => __('name is must be between 191 character'),
            'username.required' => __('username is required'),
            'username.max' => __('username is must be between 191 character'),
            'username.unique' => __('username is already taken'),
            'email.unique' => __('email is already taken'),
            'email.required' => __('email is required'),
            'password.required' => __('password is required'),
            'password.confirmed' => __('both password does not matched'),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if($data['referal_code']=="")
        {
            $user_type="Employer";
        }
        else{
            $user_type="Employee";
        }
       
          $users= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'user_type'=>$user_type,
            'country' => $data['country'],
            'city' => $data['city'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);

        $latest_id=User::latest()->first()->id;       
        if($data['referal_code']==""){

        $uniqueId=str_replace(' ', '', $data['name']).'S'.time();
        $employer=Employer::latest()->first();
        
        if($employer)
        {
          $emp_id="EM".($employer->id+1);
        }
        else{
            $emp_id="EM1";
        }
         
        Employer::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'user_id'=>$latest_id,
            'username'=>$emp_id,
            'unique_id'=>$uniqueId
             ]);

            }
            else{
                $latest_data=Client::latest()->first();
                if($latest_data)
                {
                    $username="CL".($latest_data->id+1);
                }
                else{
                    $username="CL1";
                }
                Client::create([
                    'name'=>$data['name'],
                    'email'=>$data['email'],
                    'user_id'=>$latest_id,
                    'referal_code'=>$data['referal_code'],
                    'username'=>$username

                ]);
            }
       
            return $users;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createAdmin(Request $request)
    {
        $this->adminValidator($request->all())->validate();
        Admin::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('admin.home');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('frontend.user.register');
    }

}
