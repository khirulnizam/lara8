<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        //unlock or lock
        $this->middleware('auth');
    }//end construct

    public function index(Request $request)
    {
        if($request==null){//display all
            $trainers=Trainer::paginate(5);
        }
        else{//filtering process with
            $keyword=$request->get('keyword');
            //$request is data from the form
            $trainers=Trainer::where('trainername',
            'LIKE','%'.$keyword.'%')
            ->paginate(5);
        }
        //point to interface named index
        return view('trainers.index')
        ->with(compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //call the create.blade.php 
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store data to databasse
        //data validation/all field not nullable
        $request->validate([
            'trainername' => 'required',
            'trainerexpert' => 'required',
            'trainerweb' => 'required'
        ]);
        //execute saving record to database model
        Trainer::create($request->all());//insert sql

        //redirect
        return redirect()->route('trainer.create')
        ->with('success', 'The new trainer created successfully.');

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
        $trainer=Trainer::find($id);
        return view('trainers.edit')
                ->with(compact('trainer'));
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
        //inside update function
        $trainer=Trainer::find($id);
        $trainer->update(
            $request->only('trainername', 'trainerexpert','trainerweb')
        );
        return redirect('/trainer')
                ->with('success','Trainer record has been updated');
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
        $trainer=Trainer::find($id);
        $trainer->delete();
        return redirect('/trainer')
                ->with('success','Trainer record has been deleted');

    }
}
