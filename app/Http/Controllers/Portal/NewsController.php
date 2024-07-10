<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

class NewsController extends Controller
{
    public function index()
    {
        $news = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->paginate(10);

        $randomNews = Post::with(['user', 'category'])
            ->where([
                ['post_status', '=', 'Published'],
                ['published_at', '<', now()],
            ])
            ->inRandomOrder()
            ->take(5)
            ->get();

        $breaking_news = BreakingNews::with(['post'])->latest()->get();

        $headlines = Headline::with(['post'])->latest()->get();

        // dd($headlines);

        $tags = Tag::all();

        return view('pages.portal.news', [
            'news' => $news,
            'random_news' => $randomNews,
            'breaking_news' => $breaking_news,
            'headlines' => $headlines,
            'tags' => $tags
        ]);
    }

    public function newsDetail($slug)
    {
        $news = Post::with(['user', 'category'])->where('slug', $slug)->firstOrFail();

        $latest_news = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(6)->latest()->get();

        $related_news = Post::with(['user', 'category'])->where([
            ['users_id', '=', $news->users_id],
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(5)->latest()->get();

        if ($news->sub_categories != NULL) {
            $sc = Category::where('id', $news->sub_categories)->firstOrFail();
        } else {
            $sc = '';
        }

        $tags = Tag::all();

        return view('pages.portal.news-detail', [
            'post' => $news,
            'sc' => $sc,
            'latest_news' => $latest_news,
            'related_news' => $related_news,
            'tags' => $tags
        ]);
    }

    public function autocomplete(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Post::select('post_title')
            ->where([
                ['post_title', 'LIKE', '%' . $query . '%'],
                ['post_status', '=', 'Published'],
                ['published_at', '<', now()],
            ])
            ->pluck('post_title');

        return response()->json($filter_data);
    }

    public function searchArticle(Request $request)
    {
        $post = Post::with(['user', 'category'])
            ->where('post_title', $request->keyword)
            ->orWhere('post_title', 'like', '%' . $request->keyword . '%')
            ->paginate(6);
        $count = Post::with(['user', 'category'])->where('post_title', $request->keyword)->orWhere('post_title', 'like', '%' . $request->keyword . '%')->count();
        $latest_post = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(6)->latest()->get();

        return view('pages.home.search', [
            'post' => $post,
            'keyword' => $request->keyword,
            'count' => $count,
            'latest_post' => $latest_post
        ]);
    }
}
