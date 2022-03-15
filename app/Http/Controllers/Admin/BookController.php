<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class BookController extends Controller
{
    public function index(): View
    {
        return view('admin.books.index', [
            'title' => 'Books',
            'books' => Book::latest()->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.books.create', [
            'title' => 'Create a new book'
        ]);
    }

    public function store(BookRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        $data = $request->validated();
        $data['slug'] = str($data['title'])->slug();
        $data['image'] = $request->file('image') ? $request->file('image')->store('img/books', 'public_path') : null;
        $data['file'] = $request->file('file') ? $request->file('file')->store('files', 'public_path') : null;
        Book::create($data);
        DB::commit();

        return redirect(route('books.index'))->with('message', 'Book created successfully');
    }

    public function edit(Book $book): View
    {
        return view('admin.books.edit', [
            'title' => 'Edit a book',
            'book' => $book
        ]);
    }

    public function update(BookRequest $request, Book $book): RedirectResponse
    {
        DB::beginTransaction();
        $data = $request->validated();
        $data['slug'] = str($data['title'])->slug();
        if ($request->file('image')) $data['image'] = $request->file('image')->store('img/books', 'public_path');
        if ($request->file('file')) $data['file'] = $request->file('file')->store('files', 'public_path');
        Book::where('slug', $book->slug)->update($data);
        DB::commit();

        return redirect(route('books.index'))->with('message', 'Book updated successfully');
    }

    public function destroy(Book $book): RedirectResponse
    {
        Book::destroy($book->id);

        return redirect(route('books.index'))->with('message', 'Book deleted successfully');
    }

    public function download(Book $book): BinaryFileResponse|RedirectResponse
    {
        if (!$book->file) return back()->with('message', 'File not found for ' . $book->title);
        return response()->download($book->file);
    }
}
