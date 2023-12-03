<?php

namespace App\Http\Controllers\Admin\Marques;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Brand;
// use Hash;
use Illuminate\Support\Facades\Hash ;

class MarqueController extends Controller
{
    public function __construct()
    {
        
    }


    public function create()
    {
       
        return view('admin.marques.create');
    }

    public function index(Request $request)
    {
        $marques = Brand::latest()->get();
        // dd( $users );
        return view('admin.marques.index',compact('marques'));
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
