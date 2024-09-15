<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Venue') }}</div>
                    <div class="card-body">
                        <a href="{{route('venue.create')}}">Create Venue</a>
                        <div class="col-md-12 mt-5 d-flex" style="flex-wrap: wrap">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>
                                        <a href="{{ route('venue.index', ['sortField' => 'id', 'sortDirection' => $sortField === 'id' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
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
                                        <a href="{{ route('venue.index', ['sortField' => 'name', 'sortDirection' => $sortField === 'name' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
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
                                    <th>Slug</th>
                                </tr>

                                @foreach ($venues as $venue)
                                    <tr>
                                        <td>{{ $venue->id }}</td>
                                        <td>
                                            <a class="btn btn-warning"  href="{{ route('venue.edit', $venue->id)  }}">{{ $venue->name }}</a>
                                            <form method="post" action="{{ route('venue.destroy', $venue->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger mt-3">Delete</button>
                                            </form>
                                        </td>
                                        <td>{{ $venue->slug }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $venues->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
