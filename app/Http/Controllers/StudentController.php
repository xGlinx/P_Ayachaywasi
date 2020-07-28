<?php

namespace App\Http\Controllers;


use App\Student;
use App\Achievement;
use App\Skill;
use App\Activities;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student_id)
    {
        //
        $student = Student::where('id_user',$student_id)->get();
        return view('student.edit')->with(compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dataStudent=request()->except(['_token','_method']);

        if($request->hasFile('picture')){
          $dataStudent['picture']=$request->file('picture')->store('uploads','public');
        }
        
        Student::where('id_user','=',$id)->update($dataStudent);
        $student = Student::where('id_user',$id)->get();
        $ach = Achievement::where('student_id','1')->get();
        $skill = Skill::where('student_id','1')->get();
        $activity = Activities::where('student_id','1')->get();
        $student = Student::where('id_user','1')->get();
        return view('cv.index')->with(compact('ach','skill','activity','student'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
