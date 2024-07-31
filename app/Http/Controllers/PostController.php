<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostView;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home(): View
    {

       // API'den JSON verilerini al
       $response = Http::get(env('API_URL') . 'post/home');

    // JSON verilerini diziye dönüştür
    $data = $response->json();

    // Latest post
    $latestPostData = $data['latest_post'];
    $latestPost = null;
    if($latestPostData != null)
    {
        $latestPost = new Post();
        $latestPost->fill($latestPostData);
    }

    // Popüler gönderiler
    $popularPostsData = $data['popular_posts'];
    $popularPosts = collect($popularPostsData)->map(function($item) {
        $post = new Post();
        $post->fill($item);
        return $post;
    });

    // Önerilen gönderiler
    $recommendedPostsData = $data['recommended_posts'];
    $recommendedPosts = collect($recommendedPostsData)->map(function($item) {
        $post = new Post();
        $post->fill($item);
        return $post;
    });

    // Kategoriler
    $categoriesData = $data['categories'];
    $categories = collect($categoriesData)->map(function($item) {
        $category = new Category();
        $category->fill($item);
        return $category;
    });

    // Verileri kontrol etmek için
        return view('home', compact(
            'latestPost',
            'popularPosts',
            'recommendedPosts',
            'categories'
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post, Request $request)
    {
        if (!$post->active) {
            throw new NotFoundHttpException();
        }
       
        $postData = [
            'post' => $post,
          
        ];
        
        $response = Http::post(env('API_URL') . 'post/show', $postData);
        $data = $response->json();

        $prevData = $data['prev'];
        $prev = null;
        if($prevData != null)
        {
            $prev = new Post();
            $prev->fill($prevData);
        }

        $nextData = $data['next'];
       
       $next = null;
       if($nextData != null)
        {
          $next = new Post();
          $next->fill($nextData);
        }
        $user = $request->user();
        PostView::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'post_id' => $post->id,
            'user_id' => $user?->id
        ]);

        return view('post.view', compact('post', 'prev', 'next'));
    }

    public function byCategory(Category $category)
    {
        $postData = [
            'category' => $category,
        ];
        $response = Http::post(env('API_URL') . 'post/category',$postData );
        $data = $response->json();
        $postDatas = $data['posts']['data'];
        $posts = collect($postDatas)->map(function($item) {
            $post = new Post();
            $post->fill($item);
            return $post;
        });

        return view('post.index', compact('posts', 'category'));
    }

    public function search(Request $request)
    {
        $q = $request->get('q');
        $postData = [
            'request' => $q,
          
        ];
        
        $response = Http::post(env('API_URL') . 'post/search', $postData);

        $data = $response->json();
        $postDatas = $data['posts']['data'];
      
      $posts = collect($postDatas)->map(function($item) {
                $post = new Post();
                $post->fill($item);
                return $post;
     });
        
      
        return view('post.search', compact('posts'));
    }
}
