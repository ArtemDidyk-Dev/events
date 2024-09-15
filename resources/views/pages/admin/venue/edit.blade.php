<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Venue</div>
                    <x-form-venue
                        name="{{$venue->name}}"
                        slug="{{$venue->slug}}"
                        route="{{ route('venue.update', $venue->id) }}"
                        buttonText="Update Venue"
                        method="PUT"
                    />
                </div>
            </div>
        </div>
    </div>

</x-layout>
