<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\StatisticPost;
use App\Models\Tag;

class StatisticController extends Controller
{
    public function index()
    {

        $statistic_all = StatisticPost::with(['user'])->where([
            ['post_status', '=', 'Published'],
            ['created_at', '<', now()],
        ])->latest()->paginate(9);

        // var_dump($statistik_all);

        return view('pages.portal.statistic', [
            'statistics' => $statistic_all,
        ]);
    }

    public function statisticDetail($slug)
    {
        $post = StatisticPost::with(['user'])->where('slug', $slug)->firstOrFail();

        $latest_statistics = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(6)->latest()->get();

        $related_statistics = Post::with(['user', 'category'])->where([
            ['users_id', '=', $post->users_id],
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->take(3)->latest()->get();

        if ($post->sub_categories != NULL) {
            $sc = Category::where('id', $post->sub_categories)->firstOrFail();
        } else {
            $sc = '';
        }

        $tags = Tag::all();

        $json_data = json_decode($post->json_data, true);
        $data_fix = [];

        // var_dump($json_data); exit;

        foreach ($json_data as $key => $value) :
            if (empty($value['label']))
                continue;

            $data_fix['labels'][] = $value['label'];
            $data_fix['values'][] = $value['value'];
        endforeach;

        $apex_data = [
            'name' => 'Test Chart',
            'data' => $data_fix['values'],
            'categories' => $data_fix['labels'],
        ];

        // var_dump($apex_data); exit;

        return view('pages.portal.statistic-detail', [
            'post' => $post,
            'sc' => $sc,
            'latest_statistics' => $latest_statistics,
            'related_statistics' => $related_statistics,
            'apex_data' => $apex_data,
            'tags' => $tags
        ]);
    }
}
