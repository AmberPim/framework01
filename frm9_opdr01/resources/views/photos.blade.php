@extends("app")

@section("title")
    Photos
@endsection


@section("content")
<h1 id="album-header">
   Select your Album
</h1>


<div class="row">
    <div class="col-sm-6">
        <img class="albumCover" src="/images/deancover.jpg">

        <form method="POST" action="{{ route('pics') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="cat" name="cat" value="Dean">
            <button class="btn albumbutt" type="submit">Dean</button>
        </form>

    </div>

    <div class="col-sm-6">
        <img class="albumCover" src="/images/samcover.jpg">

        <form method="POST" action="{{ route('pics') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="cat" name="cat" value="Sam">
            <button class="btn albumbutt" type="submit">Sam</button>
        </form>

    </div>
</div>
<br> <br>
<div class="row">
    <div class="col-sm-6">
        <img class="albumCover" src="/images/cascover.jpg">

        <form method="POST" action="{{ route('pics') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="cat" name="cat" value="Castiel">
            <button class="btn albumbutt" type="submit">Castiel</button>
        </form>
    </div>

    <div class="col-sm-6">
        <img class="albumCover" src="/images/crowleycover.jpg">

        <form method="POST" action="{{ route('pics') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="cat" name="cat" value="Crowley">
            <button class="btn albumbutt" type="submit">Crowley</button>
        </form>
    </div>
</div>






@endsection