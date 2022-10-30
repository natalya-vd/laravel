<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\CreateRequest;
use App\Http\Requests\News\EditRequest;
use App\Models\News\News;
use App\Queries\NewsQueryBuilder;
use App\Queries\CategoriesQueryBuilder;

class NewsController extends Controller
{
    public function list(NewsQueryBuilder $builder)
    {
        return view('admin.pages.news.index')->with('news', $builder->getNewsPagination());
    }

    public function store(CreateRequest $request, NewsQueryBuilder $builder, CategoriesQueryBuilder $builder_category)
    {
        $news = $request->validated();
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
                'slug' => $builder_category
                    ->getCategory($news['category_id'])
                    ->value('slug')
            ]);
        }

        return back()->with('error',  __('messages.admin.news.create.error'));
    }

    public function create(CategoriesQueryBuilder $builder_category)
    {
        return view('admin.pages.news.create', [
            'categories' => $builder_category->getCategories()
        ]);
    }

    public function update(EditRequest $request, News $news, NewsQueryBuilder $builder)
    {
        $data = $request->validated();

        $data['is_private'] = isset($data['is_private']);

        if ($request->hasFile('image')) {
            $path = $request->image->store('images', 'public');
            $data['image'] = $path;
        }

        if ($builder->update($news, $data)) {
            return back()->with('success', __('messages.admin.news.update.success'));
        }

        return back()->with('error', __('messages.admin.news.update.error'));
    }

    public function edit(News $news, CategoriesQueryBuilder $builder)
    {
        return view('admin.pages.news.edit', [
            'news' => $news,
            'categories' => $builder->getCategories()
        ]);
    }

    public function destroy(News $news, NewsQueryBuilder $builder)
    {
        if ($builder->delete($news)) {
            return back()->with('success', __('messages.admin.news.delete.success'));
        }

        return back()->with('error', __('messages.admin.news.delete.error'));
    }
}
