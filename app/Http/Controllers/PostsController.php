<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PostsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $posts = $user->feed_posts()->orderBy('created_at', 'desc')->paginate(9);

            $data = [
                'user' => $user,
                'posts' => $posts,
            ];
        }

        return view('welcome', $data);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
            'image' => 'required|image'
        ]);
        
        if(request('image')){
            $filename = request()->file('image')->getClientOriginalName();
            $request->image = request('image')->storeAs('public/images', $filename);
        }
        
        $request->user()->posts()->create([
            'content' => $request->content,
            'picture_url' => $request->image,
        ]);
        
        $user = \Auth::user();
        $user_level = User::find($user->id)->level;
        $user_xp = User::find($user->id)->xp;
        
        if($user_xp === 95){
            $user->fill(['level'=>$user_level+1, 'xp'=> 0]);    
        }
        else{
            $user->fill(['xp'=> $user_xp + 5]);
        }
        
        $user->save();
        return back();
    }
    
    public function destroy($id)
    {
        $post = \App\Post::findOrFail($id);

        if (\Auth::id() === $post->user_id) {
            $post->delete();
        }
        
        return back();
    }
}
