<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use App\Models\News;

class NewsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('admin.news.index', [
            'title' => 'News',
            'news' => News::latest()->get()
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('admin.news.create', [
            'title' => 'Create a new news'
        ]);
    }

    public function store(StoreNewsRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        News::create($data);

        return redirect(route('news.index'))->with('message', 'New news created successfully');
    }

    public function edit(News $news): \Illuminate\Contracts\View\View
    {
        return view('admin.news.edit', [
            'title' => 'Edit a news',
            'news' => $news
        ]);
    }

    public function update(UpdateNewsRequest $request, News $news): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        News::where('id', $news->id)->update($data);

        return redirect(route('news.index'))->with('message', 'News updated successfully');
    }

    public function destroy(News $news): \Illuminate\Http\RedirectResponse
    {
        News::destroy($news->id);

        return redirect(route('news.index'))->with('message', 'News deleted successfully');
    }
}
