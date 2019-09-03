<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bird;
class BirdsController extends Controller
{   
    /**
     * Display the list of Birds.
     *
     * @param  object  $page
     * @return \Illuminate\Http\Response
    */
    public function show(Bird $page) 
    {   $page=Bird::all();
       return view('pages.birds',compact('page'));

       
    }  
    /**
     * Display the details od the bird.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function details($id) 
    {  $bird=Bird::where('id',$id)->first();  

     return view('pages.birdsDetail',compact('bird'));

       
    }
}

