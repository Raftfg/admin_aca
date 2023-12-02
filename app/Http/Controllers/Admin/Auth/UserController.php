<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use Hash;
use Illuminate\Support\Facades\Hash ;

class UserController extends Controller
{

    public function demarcheurList()
    {
        $users = User::latest()->get();
        return view('admin.demarcheurs.index',compact('users'));
    }

    public function clientList()
    {
        $users = User::latest()->get();
        return view('admin.clients.index',compact('users'));
    }


    public function delete($id)
    {
        //
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('update','Data deleted successfully!');
    }


}
