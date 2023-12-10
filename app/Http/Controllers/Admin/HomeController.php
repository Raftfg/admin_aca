<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\Importer;
use App\Models\Brand;
use App\Models\Modeel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }

 
    public function index()
    {
        $totalUser = User::all()->count();
        $totalImpoter  = Importer::all()->count();
        $totalVehicle = Vehicle::all()->count();
        $totalBrand  = Brand::all()->count();
        $totalVehicleType = Modeel::orderBy('id', 'Desc')->get();
        $years = $totalVehicleType;
        $users_year = $totalVehicleType;

        return view('admin/home', compact('years','users_year', 'totalUser', 'totalImpoter','totalVehicle','totalBrand','totalVehicleType'));
    }

    public function store(Request $request)
    {
        
    }

    public function update($id)
    {

    }


    public function edit(Request $request)
    {

    }


    public function delete($id)
    {
   
    }


}
