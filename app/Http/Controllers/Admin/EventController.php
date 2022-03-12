<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    public function index(): View
    {
        return view('admin.events.index', [
            'title' => 'Events',
            'events' => Event::latest()->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.events.create', [
            'title' => 'Create a new event'
        ]);
    }

    public function store(EventRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Event::create($data);

        return redirect(route('events.index'))->with('message', 'Event created successfully');
    }

    public function edit(Event $event): View
    {
        return view('admin.events.edit', [
            'title' => 'Edit an event',
            'event' => $event
        ]);
    }

    public function update(EventRequest $request, Event $event): RedirectResponse
    {
        $data = $request->validated();
        Event::where('id', $event->id)->update($data);

        return redirect(route('events.index'))->with('message', 'Event updated successfully');
    }

    public function destroy(Event $event): RedirectResponse
    {
        Event::destroy($event->id);

        return redirect(route('events.index'))->with('message', 'Event deleted successfully');
    }
}
