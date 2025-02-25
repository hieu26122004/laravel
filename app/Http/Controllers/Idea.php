<?php

namespace App\Http\Controllers;

use App\Models\Idea as ModelsIdea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class Idea extends Controller
{
    public function index(Request $request) {
        $search = $request->query('search');
        $ideas = ModelsIdea::with(['user', 'comments'])
            ->where('content', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        return view('home', compact('ideas', 'search'));
    }
    
    public function createIdea(Request $request) {
        $validated = $request->validate([
            'idea' => 'required|string|min:2|max:255',
        ]);
        $user_id = Auth::id();
        $idea = new ModelsIdea();
        $content = $validated['idea'];
        $likes = 0;
        $idea->content = $content;
        $idea->likes = $likes;
        $idea->user_id = $user_id;
        $idea->save();
        return redirect("/")->with("success", "Your idea has been saved successfully!");
    }
    public function delete($id)
    {
        $idea = ModelsIdea::find($id);

        if (!$idea) {
            return redirect("/")->with("fail", "The idea does not exist or has already been deleted!");
        }
        if ($idea->user_id !== Auth::id()) {
            return redirect("/")->with("fail", "You are not authorized to delete this idea!");
        }
        $idea->comments()->delete();
        $idea->likes()->delete();

        $idea->delete();

        return redirect("/")->with("success", "The idea has been deleted successfully!");
    }
    public function show($id) {
        return view("ideas.show", ["idea" => ModelsIdea::find($id)]);
    }
    public function edit($id) {
        $idea = ModelsIdea::find($id);
        $edit = true;
        return view("ideas.show", ["idea" => $idea,"edit"=> $edit]);
    }
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'content' => 'required|string|min:2|max:255',
        ]);
    
        $idea = ModelsIdea::find($id);
        if (!$idea) {
            Log::warning("Idea ID $id not found for update.");
            return redirect('/')->with('fail', 'The idea does not exist.');
        }
    
        if ($idea->user_id !== Auth::id()) {
            return redirect('/')->with('fail', 'You are not authorized to update this idea!');
        }
    
        $idea->content = $validated['content'];
        $idea->save();
        return redirect('/')->with('success', 'The idea has been updated successfully!');
    }
    
}
