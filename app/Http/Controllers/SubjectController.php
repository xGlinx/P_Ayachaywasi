<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Session;
use Illuminate\Http\Request;
use App\Category;
use App\Session_Exam;
use App\Session_Img;
use App\Session_Plus;
use App\Session_Practice;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        $grade = Grade::all();
        return view('subject.create')->with(compact('category','grade'));
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
        $dataSubject=request()->except('_token');
        Subject::insert($dataSubject);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $subject  = Subject::select('subjects.name')
                  ->where('subjects.subject_id', '=', $id)
                  ->get();

        $session  = Session::select('sessions.title', 'sessions.description','sessions.unity','sessions.session_id', 'sessions.number')
                  ->join('subjects', 'subjects.subject_id', '=', 'sessions.subject_id')
                  ->where('sessions.subject_id', '=', $id)
                  ->get();

                  $images = Session_Img::select('session__imgs.title', 'session__imgs.picture','session__imgs.session_id','session__imgs.session_id')
                            ->join('sessions', 'sessions.session_id', '=', 'session__imgs.session_id')
                            ->join('subjects', 'subjects.subject_id', '=', 'sessions.subject_id')
                            ->where('sessions.subject_id', '=', $id)
                            ->get();

                            $practices  = Session_Practice::select('session__practices.title', 'session__practices.description','session__practices.session_id','session__practices.session_id')
                                      ->join('sessions', 'sessions.session_id', '=', 'session__practices.session_id')
                                      ->get();

                                      $exam = Session_Exam::select('session__exams.title', 'session__exams.description','session__exams.session_id','session__exams.session_id')
                                                ->join('sessions', 'sessions.session_id', '=', 'session__exams.session_id')
                                                ->get();

                                                $plus = Session_Plus::select('session__pluses.title', 'session__pluses.description','session__pluses.session_id','session__pluses.session_id')
                                                          ->join('sessions', 'sessions.session_id', '=', 'session__pluses.session_id')
                                                          ->get();

    return view("subject.index",
                      ['session' => $session,
                      'images' => $images,
                      'practices' => $practices,
                      'exam' => $exam,
                      'plus' => $plus,
                       'subject' =>$subject]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
