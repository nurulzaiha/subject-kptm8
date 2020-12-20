<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index(){
        // query training
       $subjects = \App\Models\Subject::all();
   // dd($trainings); //cara nak debug

    
    //return to view 
    //resources/views/trainings/index.blade.php
    //return view('subjects.index');
    return view('subjects.index',compact('subjects'));
}
    //
    public function create(){

        //resources/views/trainings/create.blade.php
        return view('subjects.create');
    }
        
    
    public function store(Request $request){
        
        //store all data from form to training table
        //dd($request->all());
        //method 1 - POPO - Plain Old PHP Object
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->description= $request-> description;
        $subject->lecturer= $request-> lecturer;
        $subject->user_id= auth()->user()->id;
        $subject->save();
    
        //return redirect back
        return redirect()->back();
    }
        //
    }
    