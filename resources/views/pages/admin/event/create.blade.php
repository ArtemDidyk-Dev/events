<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Event</div>

                    <x-form
                        name=""
                        poster=""
                        dateEvent=""
                        :venues="$venues"
                        venueSelect=""
                        route="{{ route('event.store') }}"
                        buttonText="Add Event"
                        method="POST"
                    />
                </div>
            </div>
        </div>
    </div>

</x-layout>
