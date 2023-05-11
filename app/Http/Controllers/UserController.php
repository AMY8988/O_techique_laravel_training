<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::Mr()->get();
        return view('user.index' , compact('users'));
    }

    public function create(Request $request){

        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:4'
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('home');
    }

    public function show($id){

        $user = User::findOrFail($id);
        return view('user.show' , compact('user'));
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back();
    }

    public function bin(){
        $deleted_users = User::onlyTrashed()->get();

        return view('user.bin' , compact('deleted_users'));
    }

    public function restore($id){
        User::withTrashed()->where('id' , $id)->restore();
        return redirect()->back();
    }


}
