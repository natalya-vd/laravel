<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Resources\CreateRequest;
use App\Http\Requests\Resources\EditRequest;
use App\Models\News\Resource;
use App\Queries\ResourcesQueryBuilder;
use App\Services\UploadFileService;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResourcesQueryBuilder $builder)
    {
        return view('admin.pages.resources.index')->with('resources', $builder->getResourcesPagination());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        CreateRequest $request,
        ResourcesQueryBuilder $builder,
        UploadFileService $uploadedFile
    ) {
        $data = $request->validated();
        $data['image'] = '';

        if ($request->hasFile('image')) {
            $data['image'] = $uploadedFile->uploadImage($request->file('image'));
        }

        if ($builder->create($data)) {
            return redirect()->route('admin.resources.index')->with('success', __('messages.admin.resources.create.success'));
        }

        return back()->with('error',  __('messages.admin.resources.create.error'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        return view('admin.pages.resources.edit', [
            'resource' => $resource
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(
        EditRequest $request,
        Resource $resource,
        ResourcesQueryBuilder $builder,
        UploadFileService $uploadedFile
    ) {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $uploadedFile->uploadImage($request->file('image'));
        }

        if ($builder->update($resource, $data)) {
            return back()->with('success',  __('messages.admin.resources.update.success'));
        }

        return back()->with('error', __('messages.admin.resources.update.error'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Resource $resource,
        ResourcesQueryBuilder $builder
    ) {
        if ($builder->delete($resource)) {
            return back()->with('success', __('messages.admin.resources.delete.success'));
        }

        return back()->with('error', __('messages.admin.resources.delete.error'));
    }
}
