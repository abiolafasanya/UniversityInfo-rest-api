<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Course::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_title' => 'required',
            'description' => 'required',
            'waec_subjects' => 'required',
            'jamb_subject' => 'required',
            'universities' => 'required',
            'duration' => 'required'
        ]);

        return Course::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Course::find($id);
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
        $course = Course::find($id);
        $course->update($request->all());
        return $course;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($course = Course::destroy($id)){
            $message = array('message' => 'course has been removed');
            return $message;
        }
    }

        /**
     * Search resource from storage.
     *
     * @param  str  $id
     * @return \Illuminate\Http\Response
     */
    public function search($search)
    {
        return $course = Course::where('course_title', 'like', '%'.$search.'%')->get();
    }
}
