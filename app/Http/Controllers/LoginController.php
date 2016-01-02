<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin(){

        return view('app.login');
        

    }

    public function postLogin()
    {
        // $credentials = [
        //     $email  = Request::input('email'),
        //     $pass   = Request::input('password')
        // ];

        $email  = Request::input('email');
        $pass   = Request::input('password');
        echo $pass   = bcrypt($pass);

        if(Auth::attempt(['email'=>$email, 'password'=>$pass])){
            return "Hello World";
        } else {
            return "Salah";
        }
    }

    public function getRemember()
    {
        $credentials = request()->only('username', 'password');
        $remember = request('remember');

        if (auth()->attempt($credentials, $remember))
        {
            return redirect()->intended('/');
        }

        return redirect()->back()->withMessage('Invalid Credentials');
    }
}
