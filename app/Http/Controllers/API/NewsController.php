<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\JsonResponse;

class NewsController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => News::latest()->get()]);
    }

    public function show(News $news): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => $news]);
    }
}
