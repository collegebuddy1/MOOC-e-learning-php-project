<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Categorie;
use App\Video;
use Illuminate\Support\Facades\Storage;

class FormateurController extends Controller
{
    //
     public function home()
    {
        $id = Sentinel::getUser()->id;
        $arr=array('id'=>$id);
    	return view('formateur.home',$arr);
    }

    public function formation()
    {
      $video=Video::all();
        $arr=array('video'=>$video);
    	return view('formateur.formation',$arr);
    }

    public function videos()
    {
    	return view('formateur.videos');
    }

    public function videospannel()
    {
        $name = Sentinel::getUser()->first_name;
        $arr=array('name'=>$name);
        return view('formateur.pannel',$arr); 
    }

    public function showvideo()
    {
        $id = Sentinel::getUser()->id;

       $video=Video::all();
      
       $arr=array('video'=>$video,'id'=>$id);

        return view('formateur.show',$arr);
    }
    
    public function gestion()
    {
        $id = Sentinel::getUser()->id;
        $video=Video::all();
         $categorie=Categorie::all();
        $arr=array('video'=>$video,'id'=>$id,'$categorie'=>$categorie);
        return view('formateur.gestion',$arr);
    }


    public function addvideo()
    {
        $categorie=Categorie::all();
        $arr=array('categorie'=>$categorie);
        return view('formateur.AddVideo',$arr);
    }

    public function postaddvideo(Request $req)
    {
       /*     $user=User::find($id);
      $user->first_name=$req->input('first_name');
      
      $user->last_name=$req->input('last_name');
      
      $user->location=$req->input('location');
      $user->save();

      return redirect('users');*/


      /*******************************************************/

      /*$id = Sentinel::getUser()->id;
      $video=new Video();
      $num=$req->input('categorie');
      $categorie=Categorie::where('name',$num)->first();
      $video->name=$req->input('name');
      $video->description=$req->input('description');
      $video->categorie_id=$categorie->id;
      $video->user_id=$id;
      

       if(!empty($_POST)) 
    {
        
        $name             = $_FILES["video"]["name"];
        $videoPath          = '../videos/'. basename($name);
        $videoExtension     = pathinfo($videoPath,PATHINFO_EXTENSION);
        $isSuccess          = true;
        $isUploadSuccess    = false;
    
        
        if(empty($name)) 
        {
            $nameError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($description)) 
        {
            $descriptionError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
      
        if(empty($categorie)) 
        {
            $categoryError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($video)) 
        {
            $videoError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        else
        {
            $isUploadSuccess = true;
            if($videoExtension != "mp4" && $videoExtension != "webm" && $videoExtension != "avi" && $videoExtension != "mpeg" ) 
            {
                $videoError = "Les fichiers autorises sont: .mp4, .webm, .avi, .mpeg";
                $isUploadSuccess = false;
            }
            if(file_exists($videoPath)) 
            {
                $imageError = "Le fichier existe deja";
                $isUploadSuccess = false;
            }
            if($_FILES["video"]["size"] > 30000000) 
            {
                $videoError = "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["video"]["tmp_name"], $imagePath)) 
                {
                    $videoError = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
        }
        
       
    }
      $video->chemin= $videoPath; */

/****************************************************/













/*return Storage::putFile('public',$req->file('video'));
*/


      $id = Sentinel::getUser()->id;
      $video=new Video();
      $num=$req->input('categorie');
      $categorie=Categorie::where('name',$num)->first();
      $video->name=$req->input('name');
      $video->description=$req->input('description');
      $video->categorie_id=$categorie->id;
      $video->user_id=$id;
     


        $name=$_FILES["video"]["name"];
        $req->video->storeAs('public',$name);
        /*return $_FILES["video"]["name"];*/


        $video->chemin="/storage/".$name;







      $video->save();
      return redirect('show');

    }

    public function show()
    {
       /*return $url=Storage::url('ok4ee.png');*/
       $id = Sentinel::getUser()->id;

       $video=Video::all();
      foreach($video as $key){
       echo " <img src=".$key->chemin.">";

        }

    }
   

}
