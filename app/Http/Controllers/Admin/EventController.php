<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\StoreEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;
use App\Models\Event;

class EventController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('admin.events.index', [
            'title' => 'Events',
            'events' => Event::latest()->get()
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('admin.events.create', [
            'title' => 'Create a new event'
        ]);
    }

    public function store(StoreEventRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        Event::create($data);

        return redirect(route('events.index'))->with('message', 'Event created successfully');
    }

    public function edit(Event $event): \Illuminate\Contracts\View\View
    {
        return view('admin.events.edit', [
            'title' => 'Edit an event',
            'event' => $event
        ]);
    }

    public function update(UpdateEventRequest $request, Event $event): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        Event::where('id', $event->id)->update($data);

        return redirect(route('events.index'))->with('message', 'Event edited successfully');
    }

    public function destroy(Event $event)
    {
        Event::destroy($event->id);

        return redirect(route('events.index'))->with('message', 'Event deleted successfully');
    }
}
