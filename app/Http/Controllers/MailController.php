<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MailController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post')){
            User::create($request->only('name','email'));

            return redirect()->route('test')->with('success','Create success');
        }

        return view('mails.form');
    }
}
