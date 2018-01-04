@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1> {{ $post->title }}</h1>
        <p> {{ $post->updated_at->toFormattedDateString() }}</p>
        <hr>
        <p>{{ $post->body }}</p>
    </div>
@endsection