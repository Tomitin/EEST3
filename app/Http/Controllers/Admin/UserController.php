<?php

namespace eestn3\Http\Controllers\Admin;

use Illuminate\Http\Request;
use eestn3\Http\Controllers\Controller;
use eestn3\User;
use eestn3\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users', User::all());
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning', 'No puedes editarte a ti mismo.');
        }

        return view('admin.users.edit')->with(['user' => User::find($id), 'roles' => Role::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning', 'No puedes editarte a ti mismo.');
        }

        $user = User::find($id);
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index')->with('success', 'El usuario ha sido actualizado.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id == $id){
            return redirect()->route('admin.users.index')->with('warning', 'No puedes eliminarte a ti mismo.');


        }

        User::destroy($id);
            return redirect()->route('admin.users.index')->with('success', 'El usuario ha sido eliminado.');
    }
}
