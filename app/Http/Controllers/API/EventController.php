<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class EventController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => Event::latest()->get()]);
    }

    public function show(Event $event): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => $event]);
    }
}
