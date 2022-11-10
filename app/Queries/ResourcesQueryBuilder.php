<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;

use App\Models\News\Resource;

final class ResourcesQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Resource::query();
    }

    public function getResourcesPagination()
    {
        return $this->model->paginate(config('pagination.admin.resources'));
    }

    public function create(array $data): Resource|bool
    {
        return Resource::create($data);
    }

    public function update(Resource $resource, array $data): bool
    {
        return $resource->fill($data)->save();
    }

    public function delete(Resource $resource)
    {
        return $resource->delete();
    }
}
