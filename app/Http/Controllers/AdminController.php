<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user(){

        $users = User::where('usertype', '0')->get();
        return view('pages.admin.users', [
            'users' => $users
        ]);
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->back();
    }
}
