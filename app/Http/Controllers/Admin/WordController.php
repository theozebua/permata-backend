<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Word\StoreWordRequest;
use App\Http\Requests\Word\UpdateWordRequest;
use App\Models\Word;

class WordController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('admin.words.index', [
            'title' => 'Word Of The Day',
            'words' => Word::latest()->get()
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('admin.words.create', [
            'title' => 'Create a new word'
        ]);
    }

    public function store(StoreWordRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        Word::create($data);

        return redirect(route('words.index'))->with('message', 'New word created successfully');
    }

    public function edit(Word $word): \Illuminate\Contracts\View\View
    {
        return view('admin.words.edit', [
            'title' => 'Edit a word',
            'word' => $word
        ]);
    }

    public function update(UpdateWordRequest $request, Word $word): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        Word::where('id', $word->id)->update($data);

        return redirect(route('words.index'))->with('message', 'Word updated successfully');
    }

    public function destroy(Word $word): \Illuminate\Http\RedirectResponse
    {
        Word::destroy($word->id);

        return redirect(route('words.index'))->with('message', 'Word deleted successfully');
    }
}
