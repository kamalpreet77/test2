<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;


class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = auth()->user()->education;
        return view('education.index',compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_name'=>'required',
            'degree'=>'required',
            'field_of_study'=>'required',
            'graduation_start_date'=>'required',
            'graduation_end_date'=>'required',
           
    
        ]);
        auth()->user()->education()->create($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'school_name' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'graduation_start_date' => 'required',
            'graduation_end_date' => 'required',
        ]);

        $education->update($request->all());

        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return back();
    }
}
