<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $users= auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_Id',$users)->with('user')->latest()->paginate(2);
        return view ('posts.index',compact('posts'));
    }

    public function create()
    {
        return view ('posts.create');
    }

    public function destroy(Post $post)
    {
        
        $this->authorize('delete', $post);
        $post->delete();
        return redirect (('/profile/'.auth()->user()->id));
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post)
        
        return view ('posts.edit');
        
    }
    public function update(Post $post)
    {
        $this->authorize('update', $user->post);

        $data = request()->validate([
            'caption' => 'caption',
            'image'=> '',
        ]);
      
        if (request('image')) {
            $imagePath = request('image')->store('profile','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();

            $imageArray = ['image'=> $imagePath];
            
        }
      
        Auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/p/{$post->id}");
    }

    public function store()
    {
        $data = request()->validate([
            'caption'=> 'required',
            'image'=> ['required','image'],
        ]);
        $imagePath = request('image')->store('uploads','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();
        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image' => $imagePath,
        ]);
        
        return redirect ('/profile/'.auth()->user()->id);
    }

    public function show (\App\Post $post)
    {
        return view ('posts.show',compact('post'));
    }
}
