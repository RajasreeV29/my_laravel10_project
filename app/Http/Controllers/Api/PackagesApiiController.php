<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\Packagereqest;
use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackagesApiiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Package::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Packagereqest $request)
    {
       DB::table(table:"packages")->insert(values:[
            'package_name'=>$request->package_name,
            'credits'=>$request->credits,
            'credit_due'=>$request->credit_due,
            'credit_due'=>$request->status
       ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Packagereqest $request, string $id)
    {
        return Package::findOrFail($id)->update($request->validated());
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Package::findOrFail($id)->delete();
    }
}
