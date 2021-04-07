<?php

namespace App\Http\Controllers;

use App\Models\University;

use Illuminate\Http\Request;

class UniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return University::all();
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
            'name' => 'required',
            'name' => 'required',
            'name' => 'required',
            'jamb_cutoff' => 'required',
            'name' => 'required',

            
            
        ]);
        return University::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return University::find($id);
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
        $university = University::find($id);
        $university->update($request->all());
        return $university;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($university = University::destroy($id)){
            $message = array('message' => 'University has been removed');
            return $message;
        }
    }

    /**
     * Search resource from storage.
     *
     * @param  str  $id
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return $university = University::where('name', 'like', '%'.$name.'%')->get();
    }
}
