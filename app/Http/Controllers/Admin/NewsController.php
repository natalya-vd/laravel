<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News\News;
use App\Models\News\Category;
use App\Queries\NewsQueryBuilder;
use App\Queries\CategoriesQueryBuilder;

class NewsController extends Controller
{
    public function list(NewsQueryBuilder $builder)
    {
        return view('admin.pages.news.index')->with('news', $builder->getNewsPagination());
    }

    public function create(Request $request, Category $category, NewsQueryBuilder $builder, CategoriesQueryBuilder $builder_category)
    {
        $category = $builder_category->getCategories();
        if ($request->isMethod('post')) {
            $news = $request->except('_token');
            $news['is_private'] = isset($news['is_private']);
            $news['image'] = '';

            if ($request->hasFile('image')) {
                $path = $request->image->store('images', 'public');
                $news['image'] = $path;
            }

            $newsOne = $builder->create($news);

            if ($newsOne) {
                return redirect()->route('news.category.one', [
                    'id' => $newsOne->id,
                    'slug' => Category::query()
                        ->where('id', $news['category_id'])
                        ->get()
                        ->value('slug')
                ]);
            }

            return back()->with('error', 'Что-то пошло не так. Новость не добавлена');
        }

        return view('admin.pages.news.create', [
            'categories' => $category
        ]);
    }

    public function update(Request $request, News $news, NewsQueryBuilder $builder, CategoriesQueryBuilder $builder_category)
    {
        $categories =  $builder_category->getCategories();

        if ($request->isMethod('post')) {
            $data = $request->except('_token');

            $data['is_private'] = isset($data['is_private']);

            if ($request->hasFile('image')) {
                $path = $request->image->store('images', 'public');
                $data['image'] = $path;
            }

            if ($builder->update($news, $data)) {
                return back()->with('success', 'Новость обновлена');
            }

            return back()->with('error', 'Что-то пошло не так. Новость не обновлена');
        }

        return view('admin.pages.news.edit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    public function delete(News $news, NewsQueryBuilder $builder)
    {
        if ($builder->delete($news)) {
            return back()->with('success', 'Новость удалена');
        }

        return back()->with('error', 'Что-то пошло не так. Новость не удалена');
    }
}
