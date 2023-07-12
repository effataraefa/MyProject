<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facads\Auth;

class UserController extends Controller
{
    public function login()
    {

        return view('backend.pages.login');
    }
    public function do_login(Request $request)
    {

        // dd($request->all());

        $credentials = $request->except('_token');
        // dd($credentials);
        if (FacadesAuth::attempt($credentials)) {

            return to_route('dashboard');
        } else {
            return to_route('admin.login');
        }
    }
}
