<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Word;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('admin.index', [
            'title' => 'Admin Dashboard',
            'books' => Book::latest()->get(),
            'word' => Word::latest()->first(),
        ]);
    }
}
