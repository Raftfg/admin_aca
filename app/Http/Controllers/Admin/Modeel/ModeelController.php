<?php

namespace App\Http\Controllers\Admin\Modeel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modeel;
// use Hash;
use Illuminate\Support\Facades\Hash ;

class ModeelController extends Controller
{
    public function __construct()
    {
        
    }


    public function create()
    {
       
        return view('admin.Modeel.create');
    }

    public function index(Request $request)
    {
        $Modeel = Modeel::latest()->get();
        // dd( $users );
        return view('admin.Modeel.index',compact('Modeel'));
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
