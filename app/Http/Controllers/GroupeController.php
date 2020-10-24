<?php

namespace App\Http\Controllers;

use App\Models\groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groupes=groupe::all();
        return view("groupe")->with("groupes",$groupes);
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
        $groupe=new groupe;
        $groupe->name=$request->input("name");
        $groupe->level=$request->input("level");
        $groupe->number_students=$request->input("number_students");
        $groupe->save();
        return redirect("groupes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function show(groupe $groupe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function edit(groupe $groupe)
    {
        //
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, groupe $groupe)
    {
        //
        $groupe=groupe::find($groupe->id);
        $groupe->name=$request->input("name");
        $groupe->level=$request->input("level");
        $groupe->number_students=$request->input("number_students");
        $groupe->save();
        return redirect("groupes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function destroy(groupe $groupe)
    {
        //
        $groupe=groupe::find($groupe->id);
        $groupe->delete();
        return redirect("groupes"); 
    }
}
