<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\StatisticPost;
use App\Models\Tag;
use App\Services\Admin\StatistikService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StatistikController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            return StatistikService::datatable_get_all();
        }

        // $all = Category::count();
        // $published = Category::where('status', 'published')->count();
        // $draft = Category::where('status', 'draft')->count();
        // $trash = Category::onlyTrashed()->count();

        return view('pages.admin.statistik.index', [
            'all' => @$all,
            'published' => @$published,
            'draft' => @$draft,
            'trash' => @$trash
        ]);
    } // end func


    public function create()
    {
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        $tags = Tag::all();

        return view('pages.admin.statistik.create', [
            'categories' => $categories,
            'tags' => $tags,
        ]);
    } // end func



    public function store(Request $request)
    {
        $post = StatistikService::save_data($request);

        return redirect()
            ->route('statistik.index')
            ->with('success', 'Sukses! Statistik Berhasil Disimpan');
    }


    public function edit($id)
    {
        $item = StatisticPost::findOrFail($id);
        $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
        $sub_categories = Category::where('parent_id', $item->categories_id)->orderby('name', 'asc')->get();
        $tags = Tag::all();
        $json_data = json_decode($item->json_data, true);

        return view('pages.admin.statistik.edit', [
            'item' => $item,
            'categories' => $categories,
            'sub_categories' => $sub_categories,
            'tags' => $tags,
            'json_data' => $json_data
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = StatistikService::update_data($id, $request);

        return redirect()
            ->route('statistik.index')
            ->with('success', 'Sukses! Statistik Berhasil Disimpan');
    }


    public function destroy($id)
    {
        $item = StatisticPost::findorFail($id);

        $item->delete();

        return redirect()
            ->route('statistik.index')
            ->with('success', 'Sukses! Pos Berhasil Dihapus');
    }

    public function force_delete($id)
    {
        $item = StatisticPost::onlyTrashed()->findOrFail($id);

        Storage::delete($item->post_image);

        $item->forceDelete();

        return redirect()
            ->route('statistik-trash')
            ->with('success', 'Sukses! 1 Pos dihapus secara permanen.');
    }

    public function restore_data($id)
    {
        StatisticPost::withTrashed()->find($id)->restore();

        return redirect()
            ->route('statistik-trash')
            ->with('success', 'Sukses! 1 Pos berhasil dikembalikan dari sampah.');
    }
}
