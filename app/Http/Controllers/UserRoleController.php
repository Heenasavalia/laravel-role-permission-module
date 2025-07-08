<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserRoleController extends Controller
{


    public function index()
    {
        $users = User::with('roles')->get();
        return view('users.index', compact('users'));
    }
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate(['role' => 'required']);
        $user->syncRoles($request->role);

        return redirect()->route('users.index')->with('success', 'Role assigned successfully.');
    }
}
