<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Path_Subject;
use App\Path;
use Illuminate\Http\Request;

class PathSubjectController extends Controller
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
     * @param  \App\Path_Subject  $path_Subject
     * @return \Illuminate\Http\Response
     */
    public function show(Path_Subject $path_Subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Path_Subject  $path_Subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $subjects['subjects']  = Subject::select('subjects.name', 'subjects.description','subjects.subject_id')
                  ->join('path__subjects', 'path__subjects.subject_id', '=', 'subjects.subject_id')
                  ->where('path__subjects.path_id', '=', $id)
                  ->get();

        $path['path'] = Path::select('name','description','video','detail')
                    ->where('path_id','=',$id)
                    ->get();
        return view('path_subject.index',$subjects,$path);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Path_Subject  $path_Subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Path_Subject $path_Subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Path_Subject  $path_Subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Path_Subject $path_Subject)
    {
        //
    }
}
