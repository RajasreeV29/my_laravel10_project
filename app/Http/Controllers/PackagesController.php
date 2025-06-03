<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Packagereqest;
use App\Http\Requests\PackageUpdaterequst;
use Illuminate\Http\Request;
use App\Models\Package;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // In App\Http\Controllers\PackagesController.php

public function index()
{
    $package= Package::all();
    return view('package_view', compact('package')); // blade file: resources/views/packages/index.blade.php
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('add_package');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Packagereqest $request)
    {
        Package::create($request->validated());

        return view('add_package')->with('success','Package added successfully');
;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package = Package::findOrFail($id);
        return view('package_edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PackageUpdaterequst $request, string $id)
    {
       Package::findOrFail($id)->update($request->validated());
       return redirect()->route('package.index')->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('package.index')->with('success','deleted!');
    }
}
