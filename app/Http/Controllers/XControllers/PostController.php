<?php

namespace App\Http\Controllers\XControllers;

use Canvas\Tag;
use Canvas\Post;
use Canvas\Topic;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * api get all posts data with json list.
     *
     * @return array
     */
    public function list()
    {
        $posts = Post::select('id', 'title', 'summary', 'body', 'published_at', 'featured_image', 'created_at')
            ->orderByDesc('created_at')
            ->get();
        return ($posts);
    }

    /**
     * Show the posts index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::select('id', 'title', 'body', 'published_at', 'featured_image', 'created_at')
            ->orderByDesc('created_at')
            ->get();

        return view('frontend.pages.blog');
    }

    /**
     * show the given post data with title.
     *
     * @param string $title
     * @return array
     */
    public function show(string $title)
    {
        $title = str_replace("-", " ", $title);
        $post = Post::where('title', $title)->firstOrFail();
        $post = [
            'post'   => $post,
            'meta'   => $post->meta,
            'tags'   => $post->tags,
            'topics' => $post->topics,
        ];
        return  view('frontend.pages.show', compact('post'));
    }
}
