<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use tizis\laraComments\UseCases\CommentService;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'commentable_encrypted_key' => 'required|string',
            'message' => 'required|string',
        ]);

        $user = Auth::user();
        $message = $request->input('message');

        $modelData = decrypt($request->input('commentable_encrypted_key'));
        $modelClass = $modelData['type'];
        $modelId = $modelData['id'];

        $commentable = $modelClass::findOrFail($modelId);

        CommentService::createComment(
            new Comment(),
            $user,
            $commentable,
            $message
        );

        return back()->with('success', 'Comment posted!');
    }

    /*public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }*/
}
