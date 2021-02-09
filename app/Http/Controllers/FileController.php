<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
    	if($request->isMethod('post')){
    		dd($request->all());
    		$file = $request->audioFile;
    		// $fileName = 
    	}

    	return view('file.upload');
    }
}
