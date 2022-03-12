<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\JsonResponse;

class WordController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => Word::latest()->get()]);
    }

    public function show(Word $word): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => $word]);
    }
}
