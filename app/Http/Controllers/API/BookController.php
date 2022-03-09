<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => Book::latest()->get()]);
    }

    public function show(Book $book): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => $book]);
    }
}
