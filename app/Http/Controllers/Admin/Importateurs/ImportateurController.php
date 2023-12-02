<?php

namespace App\Http\Controllers\Admin\Importateurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Importer;
// use Hash;
use Illuminate\Support\Facades\Hash ;

class ImportateurController extends Controller
{
    public function __construct()
    {
        
    }


    public function create()
    {
       
        return view('admin.importateurs.create');
    }

    public function index(Request $request)
    {
        $importateurs = Importer::latest()->get();
        // dd( $users );
        return view('admin.importateurs.index',compact('importateurs'));
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
