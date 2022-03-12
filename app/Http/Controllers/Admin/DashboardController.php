<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Book, Word, News};
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
            'books' => Book::latest()->get(),
            'news' => News::latest()->get(),
            'word' => Word::where('date', date('Y-m-d'))->first(),
        ]);
    }
}
