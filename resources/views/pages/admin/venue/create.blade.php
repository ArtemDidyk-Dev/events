<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Venue</div>
                    <x-form-venue
                        name=""
                        slug=""
                        route="{{ route('venue.store') }}"
                        buttonText="Add Venue"
                        method="POST"
                    />
                </div>
            </div>
        </div>
    </div>

</x-layout>
