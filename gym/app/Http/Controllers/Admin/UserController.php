<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.edit')->only('edit','update');
        $this->middleware('can:admin.users.destroy')->only('destroy');
    }
    public function index()
    {
        return view('admin.users.index');
    }
  
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit',$user)->with('info','Se asignaron los roles correctamente');
    }
    public function destroy(User $user){
        $auth_user = Auth::user();
        if($auth_user->hasPermissionTo('admin.users.destroy')){
            $user->delete();
            return redirect()->route('admin.users.index')->with('info', 'El usuario se elimino con exito');
        }
        else {
            dd("no estas autorizado");
        }
    }

}
