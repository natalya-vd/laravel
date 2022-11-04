<?php

declare(strict_types=1);

namespace App\Queries;

use Illuminate\Database\Eloquent\Builder;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

final class UsersQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = User::query();
    }

    public function getUsersPagination(): LengthAwarePaginator
    {
        return $this->model
            ->paginate(config('pagination.admin.users'));
    }

    public function update(User $user, array $data): bool
    {
        return $user->fill($data)->save();
    }

    public function delete(User $user)
    {
        return $user->delete();
    }
}
