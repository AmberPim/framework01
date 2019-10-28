@extends("app")

@section("title")
    Album
@endsection

@section("content")
    @foreach ($photos as $photo)
        <div>
            <img class="album-image" src="/images/{{$photo->image}}">
        </div>
    @endforeach
@endsection