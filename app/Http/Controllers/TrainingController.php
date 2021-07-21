<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function __construct(){
        //unlock or lock
        //$this->middleware('auth');
    }//end construct
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('keyword')!=null){
            $keyword=$request->get('keyword');
            $trainings=Training::where('title','LIKE',
                        '%'.$keyword.'%')
                        ->paginate(7);
        }
        else{
            //fetch record from table trainings
            $trainings=Training::paginate(7);
        }
        return view ('trainings.index')
                ->with(compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //to call create form
        //in trainings/create.blade.php 
        return view ('trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //data validation/all field not nullable
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'trainer' => 'required'
        ]);
        //execute saving record to database
        Training::create($request->all());//insert sql

        return redirect()->route('training.create')
        ->with('success', 'New training created successfully.');
    }//end store

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
    public function edit($id)
    {
        //
        $training=Training::find($id);
        return view ('trainings.edit')
                ->with(compact('training'));
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
        $training=Training::find($id);
        $training->update(
            $request->only('title','desc','trainer')
        );
        return redirect('/training')->with('success',
            'Training record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE method
        //delete record based on id
        $training=Training::find($id);
        $training->delete($id);//execute delete record
        return redirect ('/training')
            ->with('success', "Record id: $id has been deleted");
    }
}
