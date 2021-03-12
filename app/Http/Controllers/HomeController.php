<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
//         $role = Role::create(['name' => 'customer']);
//  $permission = Permission::create(['name' => 'edit order']);
//  $role=Role::findById(1);
// $permission=Permission::findById(1);
//  $role->givePermissionTo($permission);
// auth()->user()->assignRole('customer');

// auth()->user()->givePermissionTo('buy product');
return auth()->user()->getAllPermissions();
// return User::role('customer')->get();
// return auth()->user()->revokePermissionTo('buy product');
}
}
