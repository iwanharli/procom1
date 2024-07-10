<?php

namespace App\Services\Admin;

use App\Models\StatisticPost;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Auth;

class StatistikService
{

    public static function datatable_get_all()
    {
        if (Auth::user()->roles == 'Administrator' || Auth::user()->roles == 'Editor') {
            $query = StatisticPost::with(['user', 'category'])->latest()->get();
        } else {
            $query = StatisticPost::where('users_id', Auth::user()->id)->with(['user', 'category'])->latest()->get();
        }

        return Datatables::of($query)
            ->addColumn('action', function ($item) {
                return Auth::user()->roles == 'Administrator' ? '
                <a class="btn btn-primary btn-xs" href="' . route('statistik.edit', $item->id) . '">
                    <i class="fas fa-edit"></i> &nbsp; Ubah
                </a>
                <form action="' . route('statistik.destroy', $item->id) . '" method="POST" onsubmit="return confirm(' . "'Anda akan menghapus item ini dari situs anda?'" . ')">
                    ' . method_field('delete') . csrf_field() . '
                    <button class="btn btn-danger btn-xs">
                        <i class="far fa-trash-alt"></i> &nbsp; Hapus
                    </button>
                </form>
            ' : '
                <a class="btn btn-primary btn-xs" href="' . route('post.edit', $item->id) . '">
                    <i class="fas fa-edit"></i> &nbsp; Ubah
                </a>
            ';
            })
            ->editColumn('post_status', function ($item) {
                return $item->post_status == 'Published' ? '<div class="badge bg-green-soft text-green">' . $item->post_status . '</div>' : '<div class="badge bg-gray-200 text-dark">' . $item->post_status . '</div>';
            })
            ->addIndexColumn()
            ->removeColumn('id')
            ->rawColumns(['action', 'post_status'])
            ->make();
    } // end func



    public static function save_data($request)
    {
        try {

            // susun json data dari data_label dan data_value
            if (empty($request->data_label))
                throw new \Exception("data label minimal terdapat 1 data");

            if (count($request->data_label) != count($request->data_value))
                throw new \Exception("jumlah data label dan data value tidak sesuai");

            $json_data = self::generate_json_data($request->data_label, $request->data_value);

            if (strlen($json_data) < 4)
                throw new \Exception("terjadi kesalahan json data tidak valid");

            $validatedData = $request->validate([
                'categories_id' => 'required',
                'sub_categories' => 'nullable',
                'chart_type' => 'nullable',
                'chart_description' => 'nullable',
                'post_title' => 'required|max:255',
                'post_teaser' => 'required',
                // 'post_content' => 'required',
                // 'slug' => 'unique:posts',
                'post_image' => 'required|image|file|max:1024',
                'post_image_description' => 'required',
            ]);

            $content = $request->post_content;

            $validatedData['post_content'] = $content;
            $validatedData['post_teaser'] = Str::limit(strip_tags($request->post_teaser), 140);

            if ($request->file('post_image')) {

                $image = $request->file('post_image');
                $path = $image->hashName('assets/statistik-images');

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(1200, 675);

                Storage::put($path, (string) $image_resize->encode());

                $validatedData['post_image'] = $path;
                //$validatedData['post_image'] = $request->file('post_image')->store('assets/statistik-images');
            }

            if ($request->publish) {
                $validatedData['post_status'] = 'Published';
            } else {
                $validatedData['post_status'] = 'Draft';
            }

            if ($request->is_schedule == 'Ya') {
                $validatedData['published_at'] = $request->published_at;
            } else {
                $validatedData['published_at'] = date('Y-m-d H:i:s');
            }

            $validatedData['user_id'] = auth()->user()->id;
            $validatedData['slug'] = Str::slug($request->post_title);
            $validatedData['json_data'] = $json_data;

            $post = StatisticPost::create($validatedData);

            // $post->tag()->attach($request->tags);

            return ['status' => true, 'message' => 'berhasil menyimpan data', 'data' => $post];
        } catch (\Throwable $th) {
            echo $th->getMessage();
            exit;

            return ['status' => false, 'message' => $th->getMessage(), 'data' => $request];
        }
    } // end func



    public static function update_data($id, $request)
    {
        try {

            // susun json data dari data_label dan data_value
            if (empty($request->data_label))
                throw new \Exception("data label minimal terdapat 1 data");

            if (count($request->data_label) != count($request->data_value))
                throw new \Exception("jumlah data label dan data value tidak sesuai");

            $json_data = self::generate_json_data($request->data_label, $request->data_value);

            if (strlen($json_data) < 4)
                throw new \Exception("terjadi kesalahan json data tidak valid");

            $validatedData = $request->validate([
                'categories_id' => 'required',
                'sub_categories' => 'nullable',
                'chart_type' => 'nullable',
                'chart_description' => 'nullable',
                'post_title' => 'required|max:255',
                'post_teaser' => 'required',
                // 'post_content' => 'required',
                // 'slug' => 'unique:posts',
                // 'post_image' => 'required|image|file|max:1024',
                // 'post_image_description' => 'required',
            ]);

            $content = $request->post_content;

            $validatedData['post_content'] = $content;
            $validatedData['post_teaser'] = Str::limit(strip_tags($request->post_teaser), 140);

            $item = StatisticPost::findOrFail($id);

            if ($request->file('post_image')) {
                Storage::delete($item->post_image);
                $image = $request->file('post_image');
                $path = $image->hashName('assets/statistik-images');

                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(1200, 675);

                Storage::put($path, (string) $image_resize->encode());

                $validatedData['post_image'] = $path;
                //$validatedData['post_image'] = $request->file('post_image')->store('assets/statistik-images');
            }

            if ($request->publish) {
                $validatedData['post_status'] = 'Published';
            } else {
                $validatedData['post_status'] = 'Draft';
            }

            $validatedData['published_at'] = $request->published_at;

            $validatedData['slug'] = Str::slug($request->post_title);
            $validatedData['json_data'] = $json_data;

            $item->update($validatedData);

            return ['status' => true, 'message' => 'berhasil menyimpan data', 'data' => $item];
        } catch (\Throwable $th) {
            echo $th->getMessage();
            exit;

            return ['status' => false, 'message' => $th->getMessage(), 'data' => $request];
        }
    } // end func


    public static function generate_json_data($labels = [], $values = [])
    {
        $fix_data = [];
        foreach ($labels as $key => $value):
            $fix_data[] = [
                'label' => @$value,
                'value' => @$values[$key] ?? 0,
            ];
        endforeach;

        return json_encode($fix_data);
    } // end func

}
