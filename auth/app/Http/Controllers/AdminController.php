<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use App\Video;
class AdminController extends Controller
{
    public function home()
    {

    	return view('admin.home');
    }

 /* public  function viewproduct()
   {
   	$product=User::all();
     
   	$arr=array('user'=>$product);
      
   	return view('admin.users',$arr);
   }*/

   public function users()
   {
    $users=User::all();
     
    $arr=array('user'=>$users);
     return view('admin.users',$arr);
   }

   public function EditUser($id)
   {
      
      $user=User::find($id);
     
      $arre=array('user'=>$user);
      
      return view('admin.edituser',$arre);

   }

   public function postEditUser($id,Request $req)
   {



      $user=User::find($id);
      $user->first_name=$req->input('first_name');
      
      $user->last_name=$req->input('last_name');
      
      $user->location=$req->input('location');
      $user->save();

      return redirect('users');





       /* 'email',
        'password',
        'last_name',
        'first_name',
        'permissions',
        'location',
        'domaine',*/
   }

   public function register()
    {
      return view('admin.AddUser');
    }


    public function postRegister(Request $re)
    {
          $this->validate($re,[
        
        'email'=>'unique:users',
        ]);

      
        
            $user=Sentinel::registerAndActivate($re->all());

        /* register activate later*/

      /*  $user=Sentinel::register($re->all());
        $activation=Activation::create($user);*/

            /***fin activate*//////
        if($re->domaine){
        $role=Sentinel::findRoleBySlug('formateur');
        }
        else{
            $role=Sentinel::findRoleBySlug('etudiant');
        }
        $role->users()->attach($user);
        return redirect('/users');

            


      

    }




   public function videos()
   {
     $video=Video::all();
     $arr=array('video'=>$video);

    return view('admin.videos',$arr);
   }
}
