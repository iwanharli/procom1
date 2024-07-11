<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\StatisticPost;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;


class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = StatisticPost::with(['user'])->where([
            ['post_status', '=', 'Published'],
            ['created_at', '<', now()],
        ])->latest()->paginate(6);

        // var_dump($statistik_all);

        return view('pages.portal.portofolio', [
            'postData' => $portofolio,
        ]);
    }

    public function portofolioDetail($slug)
    {
        $portofolio = StatisticPost::with(['user'])->where('slug', $slug)->firstOrFail();
        $blogFooter = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->take(3)->get();

        $tags = Tag::all();

        $json_data = json_decode($portofolio->json_data, true);
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

        return view('pages.portal.portofolio-detail', [
            'postData' => $portofolio,
            'apex_data' => $apex_data,
            'blogFooter' => $blogFooter,
            'tags' => $tags
        ]);
    }
}
