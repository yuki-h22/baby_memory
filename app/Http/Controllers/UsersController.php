<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user/index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        return view('user/create', compact('user'));
    }

    public function image(Request $request, User $user) {

        // バリデーション省略
        $originalImg = $request->user_image;
      
        if($originalImg->isValid()) {
            $filePath = $originalImg->store('public');
            $user->image = str_replace('public/', '', $filePath);
            $user->save();
            return redirect("/user/{$user->id}")->with('user', $user);
      
        }
    }
}
