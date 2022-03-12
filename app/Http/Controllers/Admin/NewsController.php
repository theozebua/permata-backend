<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class NewsController extends Controller
{
    public function index(): View
    {
        return view('admin.news.index', [
            'title' => 'News',
            'news' => News::latest()->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.news.create', [
            'title' => 'Create a new news'
        ]);
    }

    public function store(NewsRequest $request): RedirectResponse
    {
        $data = $request->validated();
        News::create($data);

        return redirect(route('news.index'))->with('message', 'New news created successfully');
    }

    public function edit(News $news): View
    {
        return view('admin.news.edit', [
            'title' => 'Edit a news',
            'news' => $news
        ]);
    }

    public function update(NewsRequest $request, News $news): RedirectResponse
    {
        $data = $request->validated();
        News::where('id', $news->id)->update($data);

        return redirect(route('news.index'))->with('message', 'News updated successfully');
    }

    public function destroy(News $news): RedirectResponse
    {
        News::destroy($news->id);

        return redirect(route('news.index'))->with('message', 'News deleted successfully');
    }
}
