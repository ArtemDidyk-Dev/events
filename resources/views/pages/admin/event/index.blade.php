<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Event') }}</div>
                    <div class="card-body">
                        <a href="{{route('event.create')}}">Create Event</a>
                        <div class="col-md-12 mt-5 d-flex" style="flex-wrap: wrap">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>
                                        <a href="{{ route('event.index', ['sortField' => 'id', 'sortDirection' => $sortField === 'id' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                                            ID
                                            @if ($sortField === 'id')
                                                @if ($sortDirection === 'asc')
                                                    &#x25B2;
                                                @else
                                                    &#x25BC;
                                                @endif
                                            @endif
                                        </a>
                                    </th>
                                    <th>
                                        <a href="{{ route('event.index', ['sortField' => 'name', 'sortDirection' => $sortField === 'name' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
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
                                        <a href="{{ route('event.index', ['sortField' => 'date_event', 'sortDirection' => $sortField === 'date_event' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
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
                                        <a href="{{ route('event.index', ['sortField' => 'venue_id', 'sortDirection' => $sortField === 'venue_id' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
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
                                        <td>{{ $event->id }}</td>
                                        <td>
                                          <a href="{{ route('event.edit', $event->id)  }}">  {{ $event->name }} </a>
                                            <form method="post" action="{{ route('event.destroy', $event->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger mt-3">Delete</button>
                                            </form>
                                        </td>
                                        <td><img src="{{ asset($event->poster) }}" alt="{{ $event->name }}" width="400"></td>
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
