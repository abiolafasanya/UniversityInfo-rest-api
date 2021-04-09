<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

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
            'institution_name' => 'required',
            'type' => 'required',
            'location' => 'required',
            'slug' => 'required',    
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
     * @param  str  $search
     * @return \Illuminate\Http\Response
     */
    public function search($search)
    {

        $university = University::where('slug', 'like', "%{ucwords($search)}%")
        ->orWhere('institution_name', 'like', "%{ucwords($search)}%")
        ->orWhere('location', 'like', "%{ucwords($search)}%")
        ->orWhere('type', 'like', "%{ucwords($search)}%")
         ->get();

            return Response::json([
                'data' => $university
            ]); 

             
    }
}
                        
    // return $university = University::where('slug', 'like', '%'.$search.'%')->get();
    // $term = 'institution_name' || 'slug' || 'location' || 'type';

