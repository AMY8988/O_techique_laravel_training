<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function loginCheck(Request $request){


        // dd($credentials);

        // if(Auth::guard('admin')->check()){
        //    dd( Auth::guard('admin')->user()->name);
        // }else{
        //     dd('fail');
        // };

        $credentials = array(
            'email' => $request->email,
            'password' => $request->password
        );

        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('home');
        }else{
            return dd('fail');
        }
    }

    public function logOut(){
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
