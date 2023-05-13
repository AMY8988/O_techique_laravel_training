<?php

namespace App\Http\Controllers;

use App\Models\Scopes\TestScope;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index(){
        //retrieve global and local scope
        $users = User::all();
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

        if(isset($request->imgUpload)){
             $fileName = time(). "_" . $request->file('imgUpload')->getClientOriginalName();
             $request->file('imgUpload')->storeAs('uploads' , $fileName , 'public');
             $user->imgUpload = $fileName;
        }

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

        return redirect()->route('user.index');
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
