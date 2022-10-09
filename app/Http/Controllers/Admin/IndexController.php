<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;
use App\Models\News\Categories;
use App\Models\News\News;
use App\Exports\NewsExport;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function downloadImg()
    {
        return response()->download('test.jpg');
    }

    public function downloadNews(Request $request, Categories $category, News $news)
    {
        if ($request->isMethod('post')) {
            if ($request->input('format') == 'json') {
                return $this->exportJson($news, $request->input('category_id'));
            }
            if ($request->input('format') == 'excel') {
                return $this->exportExcel($news, $request->input('category_id'));
            }
        }

        return view('admin.pages.download-news')->with('categories', $category->getCategories());
    }

    public function create(Request $request, Categories $category)
    {
        if ($request->isMethod('post')) {
            $news = json_decode(Storage::disk('local')->get('news.json'), true);
            $newValue = $request->except('_token');
            $id = count($news) + 1;

            $newValue['isPrivate'] = array_key_exists('isPrivate', $newValue) ? true : false;
            $newValue['id'] = $id;
            $news[] = $newValue;

            $this->save($news);

            return redirect()->route('news.category.one', [$category->getSlugById($newValue['category_id']), $id]);
        }
        return view('admin.pages.add-news', [
            'categories' => $category->getCategories()
        ]);
    }

    public function save($news)
    {
        Storage::disk('local')->put('news.json', json_encode($news, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }

    public function exportExcel($news, $category_id)
    {
        return Excel::download(new NewsExport($news, $category_id), 'news.xlsx');
    }

    public function exportJson($news, $category_id)
    {
        return response()->json($news->getNewsCategoryId($category_id))
            ->header('Content-Disposition', 'attachment; filename = "news.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
