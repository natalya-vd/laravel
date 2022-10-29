<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News\Category;
use App\Models\News\News;
use App\Queries\CategoriesQueryBuilder;

class CategoryController extends Controller
{
    public function list(CategoriesQueryBuilder $builder)
    {
        return view('admin.pages.categories.index')->with('categories', $builder->getCategoriesPagination());
    }

    public function create(Request $request, CategoriesQueryBuilder $builder)
    {
        if ($request->isMethod('post')) {
            $data = $request->except('_token');
            $data['slug'] = Str::slug($data['title'], '-');

            if ($builder->create($data)) {
                return redirect()->route('admin.category.list')->with('success', 'Категория добавлена');
            }

            return back()->with('error', 'Что-то пошло не так. Категория не добавлена');
        }

        return view('admin.pages.categories.create', [
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Category $category, CategoriesQueryBuilder $builder)
    {
        if ($request->isMethod('post')) {
            $data = $request->except('_token');
            $data['slug'] = Str::slug($category['title'], '-');

            if ($builder->update($category, $data)) {
                return back()->with('success', 'Категория обновлена');
            }

            return back()->with('error', 'Что-то пошло не так. Категория не обновлена');
        }

        return view('admin.pages.categories.edit', [
            'category' => $category
        ]);
    }

    public function delete(Category $category, CategoriesQueryBuilder $builder)
    {
        if ($builder->delete($category)) {
            return back()->with('success', 'Категория удалена');
        }

        return back()->with('error', 'Что-то пошло не так. Категория не удалена');
    }
}
