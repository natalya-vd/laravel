<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CreateRequest;
use App\Http\Requests\Categories\EditRequest;
use App\Models\News\Category;
use App\Queries\CategoriesQueryBuilder;


class CategoryController extends Controller
{
    public function list(CategoriesQueryBuilder $builder)
    {
        return view('admin.pages.categories.index')->with('categories', $builder->getCategoriesPagination());
    }

    public function store(CreateRequest $request, CategoriesQueryBuilder $builder): RedirectResponse
    {
        $data = $request->validated();

        if ($builder->create($data)) {
            return redirect()->route('admin.category.list')->with('success', __('messages.admin.category.create.success'));
        }

        return back()->with('error',  __('messages.admin.category.create.error'));
    }

    public function create()
    {
        return view('admin.pages.categories.create');
    }

    public function update(
        EditRequest $request,
        Category $category,
        CategoriesQueryBuilder $builder
    ): RedirectResponse {
        $data = $request->validated();

        if ($builder->update($category, $data)) {
            return back()->with('success',  __('messages.admin.category.update.success'));
        }

        return back()->with('error', __('messages.admin.category.update.error'));
    }

    public function edit(Category $category)
    {
        return view('admin.pages.categories.edit', [
            'category' => $category
        ]);
    }

    public function destroy(Category $category, CategoriesQueryBuilder $builder): RedirectResponse
    {
        if ($builder->delete($category)) {
            return back()->with('success', __('messages.admin.category.delete.success'));
        }

        return back()->with('error', __('messages.admin.category.delete.error'));
    }
}
