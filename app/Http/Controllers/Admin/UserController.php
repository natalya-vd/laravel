<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Queries\UsersQueryBuilder;
use App\Models\User;
use App\Http\Requests\Users\EditRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersQueryBuilder $builder)
    {
        return view('admin.pages.users.index')->with('users', $builder->getUsersPagination());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.pages.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Users\EditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, User $user, UsersQueryBuilder $builder)
    {
        // dd($request->all());
        $data = $request->validated();

        $data['is_admin'] = isset($data['is_admin']);

        if ($builder->update($user, $data)) {
            return back()->with('success', __('messages.admin.user.update.success'));
        }

        return back()->with('error', __('messages.admin.user.update.error'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, UsersQueryBuilder $builder)
    {
        if ($builder->delete($user)) {
            return back()->with('success', __('messages.admin.user.delete.success'));
        }

        return back()->with('error', __('messages.admin.user.delete.error'));
    }
}
