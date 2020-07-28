<?php

namespace App\Http\Controllers;

use App\Subject_Career;
use App\Career;
use Illuminate\Http\Request;

class SubjectCareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
    public function store($id)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject_Career  $subject_Career
     * @return \Illuminate\Http\Response
     */
    public function show(Subject_Career $subject_Career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject_Career  $subject_Career
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $subject = Subject_Career::where('career_id',$id)->get();
        return view('subject_career.index')->with(compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject_Career  $subject_Career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject_Career $subject_Career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject_Career  $subject_Career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject_Career $subject_Career)
    {
        //
    }
}
