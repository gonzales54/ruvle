<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(\Auth::user()->id);
        $users = User::orderBy('id', 'desc')->paginate(10);
        
        return view('users.index', [
            'user' => $user,
            'users' => $users
        ]);
    }
    
    public function show($id)
    {
        $user = User::findOrFail($id);
        $user->loadRelationshipCounts();
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);
        
        return view('users.show', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
    
    public function ranking($id)
    {
        $user = User::findOrFail($id);
        $users = User::orderBy('level', 'desc')->paginate(100);
        
        return view('users.ranking', [
            'user' => $user,
            'users' => $users
        ]);
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.edit', [
            'user' => $user,
        ]);
    }
    
    public function update($id, Request $request)
    {
        $user = \Auth::user();
        $request->validate([
            'profile_name' => 'required',
            'profile_image' => 'required',
            'background_image' => 'required',
            'profile_introduce' => 'required'
        ]);
            
        $form_name = $request->profile_name;
       
        $form_picture = $request->profile_image->getClientOriginalName();
        
        $form_introduce = $request->profile_introduce;
        
        $form_background_picture = $request->background_image->getClientOriginalName();
        
        $form_img = $request->profile_image->storeAs('', $form_picture);
        
        $form_background_img = $request->background_image->storeAs('', $form_background_picture);

        $user->fill(['name' => $form_name, 'profile_picture' => $form_img, 'profile_introduce' => $form_introduce, 'background_picture' => $form_background_img]);
        $user->save();
        
        return redirect('/');
    }
    
    public function followings($id)
    {
        $user = User::findOrFail($id);
        $user->loadRelationshipCounts();
        $followings = $user->followings()->paginate(10);

        return view('users.followings', [
            'user' => $user,
            'users' => $followings,
        ]);
    }
    
    public function followers($id)
    {
        $user = User::findOrFail($id);
        $user->loadRelationshipCounts();
        $followers = $user->followers()->paginate(10);

        return view('users.followers', [
            'user' => $user,
            'users' => $followers,
        ]);
    }
    
    public function favorites($id)
    {
        $user = User::findOrFail($id);
        $user->loadRelationshipCounts();
        $favorites = $user->favorites()->paginate(5);

        return view('users.favorites', [
            'user' => $user,
            'favorites' => $favorites,
        ]);
    }
    
}
