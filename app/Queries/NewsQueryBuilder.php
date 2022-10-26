<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use App\Models\News\News;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

final class NewsQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = News::query();
    }

    public function getNewsPagination(): Collection|LengthAwarePaginator
    {
        return $this->model
            ->with('category')
            ->paginate(config('pagination.admin.news'));
    }

    public function getNewsColumnsPagination(array $column): Collection|LengthAwarePaginator
    {
        return $this->model
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select($column)
            ->paginate(config('pagination.front.news'));
    }

    public function getNewsWithCategoryPagination($category_id): Collection|LengthAwarePaginator
    {
        return $this->model
            ->where('category_id', $category_id)
            ->paginate(config('pagination.front.news'));
    }

    public function getOneNews($id, $category_id)
    {
        return $this->model
            ->oneNews($id, $category_id)
            ->first();
    }

    public function create(array $data): News|bool
    {
        return News::create($data);
    }

    public function update(News $news, array $data): bool
    {
        return $news->fill($data)->save();
    }

    public function delete(News $news)
    {
        return $news->delete();
    }
}
