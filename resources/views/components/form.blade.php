<form method="POST" class="p-4" action="{{ $route  }}"   enctype="multipart/form-data">
    @method($method)
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputOffer">Name</label>
            <input required type="text" class="form-control" id="inputOffer" placeholder="Name" name="name" value="{{$name}}">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Poster</label>
            <input value="{{$poster}}" name="poster" class="form-control" type="file" id="formFile">
            @if($poster)
                <img class="mt-2" width="300" src="{{asset($poster)}}" alt="{{$name}}">
            @endif
        </div>

        <div class="form-group col-md-4">
            <label for="inputVertical">Date Event</label>
            <input name="data_event" value="{{$dateEvent}}" type="date" class="form-control" id="dateInput">

        </div>
        <select required name="venue" class="form-control  col-md-4">
            @foreach($venues as $venue)
                @if($venueSelect && $venue->id === $venueSelect)
                    <option selected value="{{$venue->id}}" >{{$venue->name}}</option>
                @else
                    <option value="{{$venue->id}}" >{{$venue->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary mt-3">{{$buttonText}}</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger mt-2 ml-4 mr-4" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
