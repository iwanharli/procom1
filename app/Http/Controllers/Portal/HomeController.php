<?php

namespace App\Http\Controllers\Portal;

use App\Models\Headline;
use App\Models\BreakingNews;
use App\Models\Post;
use App\Models\StatisticPost;
use App\Models\Category;
use App\Models\HeadlineCategory;
use App\Models\User;
use App\Models\Photo;
use App\Models\PostTag;
use App\Models\Tag;
use App\Models\Redaction;
use App\Models\Disclaimer;
use App\Models\Guideline;
use App\Models\Contact;
use App\Models\BreakingNewsCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $portofolio = StatisticPost::with(['user'])->where([
            ['post_status', '=', 'Published'],
            ['created_at', '<', now()],
        ])->latest()->take(4)->get();

        $headlines = Headline::with(['post'])->latest()->get();

        $blogFooter = Post::with(['user', 'category'])->where([
            ['post_status', '=', 'Published'],
            ['published_at', '<', now()],
        ])->latest()->take(3)->get();

        $client_files = [
            "bri.png", "cimb.png", "densus.png", "depkominfo.png", "fiduciary.png",
            "infocon.png", "intel.png", "jokowibasuki.png", "jokowijk.png",
            "kominfo.png", "mandiri.png", "mega.png", "pengayoman.png",
            "prabowogibran.png", "scan.py", "sgu.png", "sthana.png",
            "stsn.png", "tutwuri.png", "waskita.png", "yudisial.png"
        ];

        return view('pages.portal.index', [
            'headlines' => $headlines,
            'portofolio' => $portofolio,
            'blogFooter' => $blogFooter,
            'client_files' => $client_files
        ]);
    }
}
