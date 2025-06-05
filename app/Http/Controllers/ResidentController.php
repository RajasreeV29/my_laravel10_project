<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ResidentRequest;
use App\Http\Requests\ResidentUpdateRequest;
use App\Models\Package;



class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('dfg');
       $resid= Resident::all();
       return view('view_residents', compact('resid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("defe");
        $packages = Package::all();
        
        return view('add_resident',compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */

   public function store(ResidentRequest $request)
{ 
    // dd("hi");
    Resident::create($request->validated());
    return redirect()->route('resident.index')->with('success', 'updated');
}


    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $packages = Package::all();
        $resident = Resident::findOrFail($id);
        return view('edit_resident',compact('resident','packages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResidentUpdateRequest $request, string $id)
    {
        Resident::findOrFail($id)->update($request->validated());
        return redirect()->route('resident.index')->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $resident = Resident::findOrFail($id);
        $resident->delete();

        return redirect()->route('resident.index')->with('success','deleted!');
    }
}
