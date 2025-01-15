<?php

namespace App\Http\Controllers;
use App\Models\Comment as ModelsComment;
use Illuminate\Http\Request;

abstract class Controller
{
    public function create(Request $request, $id) {
        $validated = $request->validate([
            'content' => 'required|string|min:2|max:255',
        ]);
        $comment = new ModelsComment();
        $comment->idea_id = $id;
        $comment->content = $validated['content'];
        $comment->save();
        return redirect("/idea/$id")->with('success', 'Comment posted successfully!');
    }
}
