<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::query()
        ->where('active','=',1)
        // ->whereDate('published_at', '<',Carbon::now())
        ->orderBy('published_at','desc')
        ->paginate(5);
        // dd($posts);
        return view("home", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //check if post is active
        if( !$post->active || $post->published_at > Carbon::now()){
            throw new NotFoundHttpException();
        }
        $nextPost = Post::query()
        ->where('active',true)
        ->where('published_at','<=',Carbon::now())
        ->where('published_at','<',$post->published_at)
        ->orderBy('published_at','desc')
        ->limit(1)
        ->first();
        $previousPost = Post::query()
        ->where('active',true)
        ->where('published_at','<=',Carbon::now())
        ->where('published_at','>',$post->published_at)
        ->orderBy('published_at','asc')
        ->limit(1)
        ->first();

        return view('posts.view',compact(['post','nextPost','previousPost']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Return the specified resource from storage by category.
     */
    public function byCategory(Category $category)
    {
        $posts = Post::query()
        ->join('category_posts','posts.id','=','category_posts.post_id')
        ->where('category_posts.category_id','=',$category->id)
        ->where('active','=',true)
        ->whereDate('published_at','<=', Carbon::now())
        ->orderBy('published_at','desc')
        ->paginate(10);
        // dd($posts);
        //DONE: Always check the query two times
       return view('posts.index',compact(['posts','category']));
    }
}
