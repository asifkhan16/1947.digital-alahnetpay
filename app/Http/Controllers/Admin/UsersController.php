<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::wherehas('roles', function ($query) {
            $query->whereNot('name', 'admin')->whereNot('name', 'SuperAdmin');
        })->with('kyc_verification')->get();
        // dd($users->toArray());
        return view('admin.users.index')->with('users', $users);
    }
}
