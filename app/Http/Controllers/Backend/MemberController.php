<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{

    public function register(){
        if (Auth::guard('memberAuth')->user()) {
            return redirect(url('/'));
        } else {
            return view('frontend.register');
        }
    }

    public function login(){
        return view('frontend.login');
    }


    public function sign_up_create(Request $request){

        Member::insert([
            "firstName"=>$request->firstName,
            "lastName"=>$request->lastName,
            "username"=>$request->username,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "address"=>$request->address,
            "password"=>Hash::make($request->password),
            "created_at"=>Carbon::now(),
        ]);

        return redirect()->route('frontend.login');
    }

    public function sign_up_check(Request $request){

        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        $member = Member::where('username','=', $request->username)
                            ->orWhere('email','=', $request->username)->first();

        if ($member) {
            if(Auth::guard('memberAuth')->attempt((['email'=> $member->email, 'password'=> $request->password]))){
                return redirect()->route('frontend.index');
            }else{
                return "Password Not Match";
            }
        } else {
            return "User nai";
        }
    }


    public function logout()
    {
        Auth::guard('memberAuth')->logout();
        return redirect('/');
    }

}
