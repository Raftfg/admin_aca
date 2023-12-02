<?php

namespace App\Http\Controllers\Admin\Vehicules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
// use Hash;
use Illuminate\Support\Facades\Hash ;

class VehiculesController extends Controller
{
    public function __construct()
    {
        
    }


    public function create()
    {
       
        return view('admin.vehicules.create');
    }

    public function index(Request $request)
    {
        $vehicules = Vehicle::latest()->get();
        // dd( $users );
        return view('admin.Vehicules.index',compact('vehicules'));
    }


    public function store(Request $request)
    {
        
    }

    public function update($id)
    {
        //


    }


    public function edit(Request $request)
    {

    }


    public function delete($id)
    {
        //
   
    }




}
