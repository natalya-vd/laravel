<?php

namespace App\Http\Controllers\Admin;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\News\News;
use App\Models\News\Category;
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

    public function download(Request $request, News $news)
    {
        if ($request->isMethod('post')) {
            if ($request->input('format') == 'json') {
                return $this->exportJson($request->input('category_id'));
            }
            if ($request->input('format') == 'excel') {
                return $this->exportExcel($news, $request->input('category_id'));
            }
        }

        return view('admin.pages.news.download')->with('categories', Category::all());
    }

    public function exportExcel($news, $category_id)
    {
        return Excel::download(new NewsExport($news, $category_id), 'news.xlsx');
    }

    public function exportJson($category_id)
    {
        return response()
            ->json(
                News::query()
                    ->where('category_id', $category_id)
            )
            ->header('Content-Disposition', 'attachment; filename = "news.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
