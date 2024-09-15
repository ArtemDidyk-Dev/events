<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Event') }}</div>
                    <div class="card-body">
                        <div class="col-md-12 mt-3 d-flex" style="flex-wrap: wrap">
                            <table class="table">
                                <tbody>
                                <tr >
                                    <th>
                                        <a href="{{ route('index', ['sortField' => 'name', 'sortDirection' => $sortField === 'name' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                                            Name
                                            @if ($sortField === 'name')
                                                @if ($sortDirection === 'asc')
                                                    &#x25B2;
                                                @else
                                                    &#x25BC;
                                                @endif
                                            @endif
                                        </a>
                                    </th>
                                    <th>Poster</th>
                                    <th>
                                        <a href="{{ route('index', ['sortField' => 'date_event', 'sortDirection' => $sortField === 'date_event' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                                            Event Date
                                            @if ($sortField === 'date_event')
                                                @if ($sortDirection === 'asc')
                                                    &#x25B2;
                                                @else
                                                    &#x25BC;
                                                @endif
                                            @endif
                                        </a>
                                    </th>
                                    <th>
                                        <a href="{{ route('index', ['sortField' => 'venue_id', 'sortDirection' => $sortField === 'venue_id' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                                            Venue
                                            @if ($sortField === 'venue_id')
                                                @if ($sortDirection === 'asc')
                                                    &#x25B2;
                                                @else
                                                    &#x25BC;
                                                @endif
                                            @endif
                                        </a>
                                    </th>
                                </tr>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>
                                            {{ $event->name }}
                                        </td>
                                        <td><img src="{{asset($event->poster)}}" alt="{{ $event->name }}" width="1200" ></td>
                                        <td>{{ $event->date_event }}</td>
                                        <td>{{ $event->venue->name }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $events->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
