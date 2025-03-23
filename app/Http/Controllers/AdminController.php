<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $totalPosts = Post::count();
        $postsByCategory = Post::select('category')
            ->selectRaw('count(*) as count')
            ->groupBy('category')
            ->get();
            
        return view('admin.dashboard', compact('totalPosts', 'postsByCategory'));
    }

    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function createPost()
    {
        $categories = [
            '1960s-1970s' => '1960s-1970s',
            '1970s-1980s' => '1970s-1980s',
            '1980s-1990s' => '1980s-1990s',
            '1990s-2000s' => '1990s-2000s',
            '2000s-2010s' => '2000s-2010s',
            '2010s-2020s' => '2010s-2020s'
        ];
        
        return view('admin.posts.create', compact('categories'));
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'slug' => \Str::slug($request->title),
            'image_path' => $newImageName,
            'user_id' => Auth::id(),
            'category' => $request->input('category')
        ]);

        return redirect()->route('admin.posts')->with('success', 'Post created successfully!');
    }

    public function editPost($id)
    {
        $post = Post::findOrFail($id);
        $categories = [
            '1960s-1970s' => '1960s-1970s',
            '1970s-1980s' => '1970s-1980s',
            '1980s-1990s' => '1980s-1990s',
            '1990s-2000s' => '1990s-2000s',
            '2000s-2010s' => '2000s-2010s',
            '2010s-2020s' => '2010s-2020s'
        ];
        
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:5048'
        ]);

        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            $post->image_path = $newImageName;
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category = $request->input('category');
        $post->slug = \Str::slug($request->title);
        $post->save();

        return redirect()->route('admin.posts')->with('success', 'Post updated successfully!');
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts')->with('success', 'Post deleted successfully!');
    }
}
