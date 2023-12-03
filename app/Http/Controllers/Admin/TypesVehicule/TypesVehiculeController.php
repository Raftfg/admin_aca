<?php

namespace App\Http\Controllers\Admin\TypesVehicule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VehicleType;
// use Hash;
use Illuminate\Support\Facades\Hash ;

class TypesVehiculeController extends Controller
{
    public function __construct()
    {
        
    }


    public function create()
    {
       
        return view('admin.typesVehicule.create');
    }

    public function index(Request $request)
    {
        $typesVehicule = VehicleType::latest()->get();
        // dd( $users );
        return view('admin.typesVehicule.index',compact('typesVehicule'));
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
