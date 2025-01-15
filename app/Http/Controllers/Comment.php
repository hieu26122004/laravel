<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment as ModelComment;

class Comment extends Controller
{
    public function createComment (Request $request, $id) {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to comment.');
        }
        $comment = new ModelComment();
        $data = $request->validate([
            'content' => 'required|string|min:2|max:255',
        ]);
        $user_id = Auth::id();
        $comment->user_id = $user_id;
        $comment->content = $data['content'];
        $comment->idea_id = $id;
        $comment->save();
        return redirect("/")->with("success", "Create comment successfully!");
    }
}
