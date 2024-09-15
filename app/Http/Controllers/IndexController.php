<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\RequestEventSort;
use App\Services\EventServiceInterface;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __construct(
        public EventServiceInterface $eventService,
    ) {
    }

    public function __invoke(RequestEventSort $request): View
    {
        $sortField = $request->getDTO()
            ->sortField;
        $sortDirection = $request->getDTO()
            ->sortDirection;
        $events = $this->eventService->order(sortField: $sortField, sortDirection: $sortDirection)
            ->paginate(10)
            ->appends([
                'sortField' => $sortField,
                'sortDirection' => $sortDirection,
            ]);
        return view('pages.home', compact('events', 'sortField', 'sortDirection'));
    }
}
