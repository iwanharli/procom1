<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Headline;
use App\Models\BreakingNews;
use App\Models\Post;
use App\Models\Category;
use App\Models\HeadlineCategory;
use App\Models\User;
use App\Models\Photo;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\BreakingNewsCategory;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->paginate(9);

        $blogFooter = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->take(3)->get();

        $breakingBlog = BreakingNews::with(['post'])->latest()->take(3)->get();

        $tags = Tag::all();

        return view('pages.portal.blog', [
            'postData' => $blog,
            'blogFooter' => $blogFooter,
            'breakingBlog' => $breakingBlog,
            'tags' => $tags
        ]);
    }

    public function blogDetail($date, $slug)
    {
        $blog = Post::with(['user', 'category'])->where('slug', $slug)->firstOrFail();

        // Step 2: Fetch 3 random blog posts excluding the current post
        $randomBlog = Post::with(['user', 'category'])
            ->where('post_status', 'Published')
            ->where('published_at', '<', now())
            ->where('id', '!=', $blog->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $blogFooter = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->take(3)->get();

        if ($blog->sub_categories != NULL) {
            $sc = Category::where('id', $blog->sub_categories)->firstOrFail();
        } else {
            $sc = '';
        }

        $tags = Tag::all();

        return view('pages.portal.blog-detail', [
            'postData' => $blog,
            'blogRandom' => $randomBlog,
            'blogFooter' => $blogFooter,
            'tags' => $tags,
            'sc' => $sc,
        ]);
    }
}
