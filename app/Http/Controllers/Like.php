<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Like as LikeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Like extends Controller
{
    public function like($id)
    {
        $idea = Idea::find($id);

        if (!$idea) {
            return redirect('/')->with('fail', 'The idea does not exist.');
        }

        $userId = Auth::id();

        if ($idea->isLikedByUser($userId)) {
            LikeModel::where('user_id', $userId)->where('idea_id', $id)->delete();
            $idea->decrement('likes');
            return redirect()->back()->with('success', 'Idea unliked successfully!');
        }

        LikeModel::create([
            'user_id' => $userId,
            'idea_id' => $id,
        ]);
        $idea->increment('likes');

        return redirect()->back()->with('success', 'Idea liked successfully!');
    }
}