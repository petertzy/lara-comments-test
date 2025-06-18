<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserCommentController extends Controller
{
    /*public function index(User $user)
    {
        $comments = $user->comments()->with('commentable')->latest()->get();
        return view('users.comments', compact('user', 'comments'));
    }*/

    public function showUserComments($userId)
    {
        $user = User::findOrFail($userId);
        $comments = $user->comments;

        return view('users.comments', compact('user', 'comments'));
    }
}

