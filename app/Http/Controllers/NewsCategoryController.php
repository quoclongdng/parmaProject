<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\NewsCategory\CreateNewsCategoryRequest;
use App\Http\Requests\Client\NewsCategory\UpdateNewsCategoryRequest;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = NewsCategory::all();

        toastr()->info('Đã load data...');

        return view('pages.newsCategory.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsCategoryRequest $request)
    {
        $data = $request->all();

        $data['slug'] =Str::slug($request->name);

        NewsCategory::create($data);

        toastr()->success('Đã thêm mới dữ liệu thành công');

        return redirect('/news-category/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = NewsCategory::find($id);

        return view('pages.newsCategory.edit', compact('data'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsCategoryRequest $request)
    {
        $data = NewsCategory::find($request->id);

        $data->update($request->all());

        toastr()->success('Đã cập nhật dữ liệu thành công');

        return redirect('/news-category/create');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = NewsCategory::find($id);

        $data->delete();

        toastr()->success('Đã xóa dữ liệu thành công');

        return redirect('/news-category/create');
    }
}
