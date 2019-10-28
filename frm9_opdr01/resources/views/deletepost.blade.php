@extends("app")

@section("title")
    Delete a Post
@endsection

@section("content")
    @foreach ($photos as $photo)
        <form method="POST" action="{{ route('delete post', $photo->post_id) }}" enctype="multipart/form-data">
        <div>
            <img class="album-image" src="/images/{{$photo->image}}">
            <input type="hidden" id="cat" name="cat" value="{{$photo->post_id}}">
            <button class="btn btn-primary" type="submit">Delete</button>
            @csrf
        </div>
        </form>
    @endforeach
@endsection