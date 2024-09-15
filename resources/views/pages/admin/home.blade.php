<x-layout>

    <div class="container-full">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Admin') }}</div>

                    <div class="card-body">
                        <a href="{{route('event.index')}}">Event</a>
                        <a class="ml-3" href="{{route('venue.index')}}">Venue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
