<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\sendEmail;
use App\Mail\TestMail;


class MailController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post')){
            $startTime = microtime(true);
            // \Artisan::call("queue:work");
            for($i = 0 ;$i < 10 ;$i++){
                $testMail = new TestMail();

                $sendMailJob = new sendEmail($testMail);
                
                

                dispatch($sendMailJob);
            }
            $endTime = microtime(true);
            $timeExecute = $endTime - $startTime;

            return redirect()->route('test')->with('success','Create success');
        }

        return view('mails.form');
    	
    }
}
