<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageApiController extends Controller
{
//    public function show()
//     {
//         return view('package'); // returns Blade view
//     }
    // public function add_package()
    // {
        
    //      return view('add_package');
    // }
    // public function create_package(Request $request)

    // {
        
    //     $validated = $request->validate([
    //         'Package_name' => 'required|string|max:255',
    //         'credits' => 'required|integer|min:0',
    //         'credit_due' => 'required|string|max:255',
    //         'status' => 'required|string|max:255',
    //     ]);

    //     $pack = new Package;
    //     $pack->package_name = $request->Package_name;
    //     $pack->credits = $request->credits;
    //     $pack->credit_due = $request->credit_due;
    //     $pack->status = $request->status;
    //     $pack->save();
    //     return redirect()->route('add_package')->with('success', 'Package created successfully!');
    // }


    // public function view_package()
    // {
    //     $packages = Package::all();
    //      return view('package_view',compact('packages'));
    // }


    // public function delete(Request $request)
    // {
    // $package = Package::findOrFail($request->id)->delete();

    // // return redirect()->route('view_package');
    //     return redirect('package_view');
    // }
//     public function delete(Request $request)
// {
//     $package = Package::findOrFail($request->id);
//     $package->delete();

//     return redirect()->route('view_package')->with('success', 'Package deleted successfully!');
// }

}

