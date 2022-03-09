<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WordRequest;
use App\Models\Word;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class WordController extends Controller
{
    public function index(): View
    {
        return view('admin.words.index', [
            'title' => 'Word Of The Day',
            'words' => Word::latest()->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.words.create', [
            'title' => 'Create a new word'
        ]);
    }

    public function store(WordRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Word::create($data);

        return redirect(route('words.index'))->with('message', 'New word created successfully');
    }

    public function edit(Word $word): View
    {
        return view('admin.words.edit', [
            'title' => 'Edit a word',
            'word' => $word
        ]);
    }

    public function update(WordRequest $request, Word $word): RedirectResponse
    {
        $data = $request->validated();
        Word::where('id', $word->id)->update($data);

        return redirect(route('words.index'))->with('message', 'Word updated successfully');
    }

    public function destroy(Word $word): RedirectResponse
    {
        Word::destroy($word->id);

        return redirect(route('words.index'))->with('message', 'Word deleted successfully');
    }
}
