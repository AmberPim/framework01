@extends("app")

@section("title")
    Update a Post
@endsection

@section("content")
    @foreach ($photos as $photo)

                <img class="album-image" src="/images/{{$photo->image}}">

                <form method="POST" action="{{ route('update post') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <h2 class="inputname">Title</h2>
                        <input class="form-control" name="title" type="text" placeholder="{{$photo->title}}">
                    </div>

                    <h3>Category</h3>
                    <select class="form-control" name="category">
                        <option value="Dean">Dean</option>
                        <option value="Sam">Sam</option>
                        <option value="Castiel">Castiel</option>
                        <option value="Crowley">Crowley</option>
                    </select>
                    <br>


                    <input type="hidden" id="id" name="id" value="{{$photo->post_id}}">

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>



    @endforeach
@endsection