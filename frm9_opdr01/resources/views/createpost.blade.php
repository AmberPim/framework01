@extends("app")

@section('content')
    <h1 style="text-align:center;">Create Image Post </h1>
    <form method="POST" action="{{ route('Create a post') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <h2 class="inputname">Title</h2>
            <input class="form-control" name="title" type="text" placeholder="Add a picture">
        </div>

        <h3>Category</h3>
        <select class="form-control" name="category">
            <option value="Dean">Dean</option>
            <option value="Sam">Sam</option>
            <option value="Castiel">Castiel</option>
            <option value="Crowley">Crowley</option>
        </select>
        <br>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Image</label><br>
            <div class="col-lg-9">
                <input type="file" name="image">
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection