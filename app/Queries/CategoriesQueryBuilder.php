<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

use App\Models\News\Category;

final class CategoriesQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Category::query();
    }

    public function getCategories()
    {
        return $this->model->get();
    }

    public function getCategoriesPagination()
    {
        return $this->model->paginate(config('pagination.admin.categories'));
    }

    public function getCategory($id)
    {
        return $this->model
            ->where('id', $id)
            ->get();
    }

    public function getCategoryBySlug($slug)
    {
        return $this->model
            ->where('slug', $slug)
            ->get();
    }

    public function getNewsBySlug($slug)
    {
        return $this->model
            ->where('slug', $slug)
            ->first()
            ->news()
            ->paginate(config('pagination.front.news'));
    }

    public function create(array $data): Category|bool
    {
        $data['slug'] = Str::slug($data['title'], '-');
        return Category::create($data);
    }

    public function update(Category $category, array $data): bool
    {
        $data['slug'] = Str::slug($data['title'], '-');
        return $category->fill($data)->save();
    }

    public function delete(Category $category)
    {
        return $category->delete();
    }
}
