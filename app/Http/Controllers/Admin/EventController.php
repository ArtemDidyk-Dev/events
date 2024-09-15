<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Http\Requests\RequestEventSort;
use App\Services\EventServiceInterface;
use App\Services\VenueServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventController extends Controller
{
    public function __construct(
        public EventServiceInterface $eventService,
        public VenueServiceInterface $venueService,
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(RequestEventSort $request): view
    {
        $sortField = $request->getDTO()
            ->sortField;
        $sortDirection = $request->getDTO()
            ->sortDirection;
        $events = $this->eventService->order(sortField: $sortField, sortDirection: $sortDirection)
            ->paginate(limit: 10)
            ->appends([
                'sortField' => $sortField,
                'sortDirection' => $sortDirection,
            ]);
        return view('pages.admin.event.index', compact('events', 'sortField', 'sortDirection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $venues = $this->venueService->all();

        return view('pages.admin.event.create', compact('venues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request): RedirectResponse
    {
        $this->eventService->store(dto: $request->getDTO());
        return redirect()->route('event.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): view
    {
        $event = $this->eventService->findById(id: $id);
        $venues = $this->venueService->all();
        $date = $this->eventService->dateParse(date: $event->date_event);
        return view('pages.admin.event.edit', compact('venues', 'event', 'date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, int $id): RedirectResponse
    {
        $this->eventService->update(dto: $request->getDTO(), id: $id);
        return redirect()->back();
    }

    public function destroy(string $id): RedirectResponse
    {
        return $this->eventService->destroy(id: $id);
    }
}
