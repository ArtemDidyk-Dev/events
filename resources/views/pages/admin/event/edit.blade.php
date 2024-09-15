<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Event</div>
                    <x-form
                        name="{{$event->name}}"
                        poster="{{$event->poster}}"
                        dateEvent="{{$date}}"
                        :venues="$venues"
                        venueSelect="{{$event->venue_id}}"
                        route="{{ route('event.update', $event->id ) }}"
                        buttonText="Update Event"
                        method="PUT"
                    />
                </div>
            </div>
        </div>
    </div>

</x-layout>
