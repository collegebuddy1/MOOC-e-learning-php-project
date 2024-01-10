<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class EtudiantController extends Controller
{
    //
     public function home()
    {
    	return view('etudiant.home');
    }

    public function formation()
    {
        $video=Video::all();
        $arr=array('video'=>$video);
    	return view('etudiant.formation',$arr);
    }

    public function videos()
    {
    	return view('etudiant.videos');
    }

}
