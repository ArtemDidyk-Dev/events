<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestVenueSort;
use App\Http\Requests\VenueRequest;
use App\Services\VenueServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VenueController extends Controller
{
    public function __construct(
        public VenueServiceInterface $venueService
    ) {
    }

    public function index(RequestVenueSort $request): View
    {
        $sortField = $request->getDTO()
            ->sortField;
        $sortDirection = $request->getDTO()
            ->sortDirection;
        $venues = $this->venueService->order(sortField: $sortField, sortDirection: $sortDirection)
            ->paginate(10)
            ->appends([
                'sortField' => $sortField,
                'sortDirection' => $sortDirection,
            ]);
        return view('pages.admin.venue.index', compact('venues', 'sortField', 'sortDirection'));
    }

    public function create(): View
    {
        return view('pages.admin.venue.create');
    }

    public function store(VenueRequest $request): RedirectResponse
    {
        $this->venueService->store(dto: $request->getDTO());
        return redirect()->route('venue.index');
    }

    public function edit(int $id): View
    {
        $venue = $this->venueService->findById(id: $id);
        return view('pages.admin.venue.edit', compact('venue'));
    }

    public function update(VenueRequest $request, int $id): RedirectResponse
    {
        $this->venueService->update(dto: $request->getDTO(), id: $id);
        return redirect()->back();
    }

    public function destroy(string $id): RedirectResponse
    {
        return $this->venueService->delete(id: $id);
    }
}
