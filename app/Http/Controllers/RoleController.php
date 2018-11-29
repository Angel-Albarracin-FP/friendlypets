<?php

namespace FriendlyPets\Http\Controllers;

use Illuminate\Http\Request;
use FriendlyPets\User;
use Caffeinated\Shinobi\Models\Role;

class RoleController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('role.edit', compact('user', 'roles'));
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
        $user = User::find($id);
        $user->roles()->sync($request->get('roles'));
        return redirect('/usuarios');
    }
}
