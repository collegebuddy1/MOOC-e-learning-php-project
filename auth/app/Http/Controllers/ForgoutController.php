<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Mail;
use Sentinel;

class ForgoutController extends Controller
{
    //
    public function forgoutpass()
    {
    	return view('authentication.forgoutpass');
    }

    public function postforgout(Request $request)
    {
    	$user=User::whereEmail($request->email)->first();
       

    	if($user==NULL)
    		return redirect()->back()->with(['succes'=>'Reset code was sent to your email']);
         $sentinelUser=Sentinel::findById($user->id);
    	$reminder=Reminder::exists($sentinelUser) ?: Reminder::create($sentinelUser);
    		$this->sendEmail($user,$reminder->code);
    		return redirect()->back()->with(['succes'=>'Reset code was sent to your email']);

    }

    public function resetPassword($email,$resetCode){
           $user=User::byEmail($email);

           if($user==NULL)
            abort(404);
        $sentinelUser=Sentinel::findById($user->id);
            if($reminder=Reminder::exists($sentinelUser)){
                if ($resetCode==$reminder->code) {
                   return view('authentication.reset');
                } else {
                   return redirect('/');
                }
                
            }
            else return redirect('/');
    }


    public function postresetpassword(Request $re,$email,$resetCode)
    {
        $this->validate($re,[
                
                
                'password'=>'confirmed|required',
        ]);
        $user=User::byEmail($email);

           if($user==NULL)
            abort(404);
        $sentinelUser=Sentinel::findById($user->id);
            if($reminder=Reminder::exists($sentinelUser)){
                if ($resetCode==$reminder->code) {
                  Reminder::complete($sentinelUser,$resetCode,$re->password);
                  return redirect('/login')->with('succes','Great,Please login with your new password');
                } else {
                   return redirect('/');
                }
                
            }
            else return redirect('/');
    }




    private function sendEmail($user,$code)
    {
    	Mail::send('emails.forgout-password' ,[
    		'user'=>$user,
    		'code'=>$code

    	], function($message) use ($user){
    		$message->to($user->email);

    		$message->subject("Hello $user->first_name , reset ur password.");
    	}
    );


    }
}
