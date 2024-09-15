<form method="POST" class="p-4" action="{{ $route  }}"   enctype="multipart/form-data">
    @method($method)
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputOffer">Name</label>
            <input required type="text" class="form-control" id="inputOffer" placeholder="Name" name="name" value="{{$name}}">
        </div>
        <div class="form-group col-md-4">
            <label for="inputOffer">Slug</label>
            <input type="text" class="form-control" id="inputOffer" placeholder="Slug" name="slug" value="{{$slug}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">{{$buttonText}}</button>
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
