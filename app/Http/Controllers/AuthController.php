<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\support\facades\DB;
use Illuminate\Support\Str;
use Session;

class AuthController extends Controller
{
    public function login ()
    {
        return view ('pages.auth.login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('nik', 'password'))) {
            return redirect('/');
        }
        return redirect('/auth');
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/auth');
    }
    public function create(Request $request)
    {
        $user = new \App\user;
        $user->name = $request->name;
        $user->section = $request->section;
        $user->nik = $request->nik;
        $user->role = $request->role;
        $user->remember_token = Str::random(60);
        $user->password = bcrypt($request->password);
        $user->save();            
            

        return redirect('/userlog');
    }

    public function data()
    {
        $user = DB::table('user')
        ->get();
        return view ('pages.auth.data', compact("user"));
    }

    public function delete($id)
    {
        DB::table('user')->where('id', $id)->delete();

        Session::flash('gagal','Data Delete Success');
        return redirect('/userlog');
    }
    
}
