<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;
class RegisterController extends Controller
{
    //
    public function register()
    {
    	return view('authentication.register');
    }


    public function postRegister(Request $re)
    {
                /*******viruevier si email deja exist*/
      /*   $user = User::where('email', '=', $re->input('email'));
       if ($user == null) {
            

            }


    	else 

            return redirect()->back()->with(['error'=>' Email already Exits.']);*/
            $this->validate($re,[
        
        'email'=>'unique:users',
        ]);

                /*active and register one*/
        /*$user=Sentinel::registerAndActivate($re->all());*/

        /* register activate later*/

        $user=Sentinel::register($re->all());
        $activation=Activation::create($user);

            /***fin activate*//////
        if($re->domaine){
        $role=Sentinel::findRoleBySlug('formateur');
        }
        else{
            $role=Sentinel::findRoleBySlug('etudiant');
        }
        $role->users()->attach($user);

        $this->sendEmail($user,$activation->code);
        return redirect('/');

    }


    private function sendEmail($user,$code)
    {
        Mail::send('emails.activation',[
            'user'=>$user,
            'code'=>$code
        ], function($message) use ($user){
            $message->to($user->email);
            $message->subject("Hello $user->first_name,
                activate your account.");
        }
    );
    }








}

