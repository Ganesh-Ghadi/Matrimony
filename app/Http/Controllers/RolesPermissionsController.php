<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RolesPermissionsController extends Controller
{
    public function index(){
        $roles = Role::all();
        $permissions = Permission::all();
        $users = User::all();

        return view('test', [
            'roles' => $roles,
            'permissions' => $permissions,
            'users' => $users
        ]);
        // return $this->sendResponse(['roles'=>$roles, 'permissions'=>$permissions, 'users'=>$users], "data retrived successfully");
    }

}
