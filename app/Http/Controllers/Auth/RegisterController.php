<?php

namespace App\Http\Controllers\Auth;

use App\Mail\ConfirmEmail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'user_type' => User::DEFAULT_TYPE,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verification_token' => str_random(16),
        ]);
        Mail::to($user)
            ->send(new ConfirmEmail($user));
        return $user; //error if redirect to login
    }


    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status','Check your email and verify');
    }


    public function verify($verification_token)
    {
        $user = User::where('verification_token', $verification_token)->first();
        if(!is_null($user)){
            $user->verify = 1; //TODO Type true false instead of 1 or 0
            $user->verification_token = '';
            $user->save();
            return redirect(route('login'))->with('status','Verified'); //verified
        }else{
            return redirect(route('login'))->with('warning','Verify your email');//error
        }
    }

}
