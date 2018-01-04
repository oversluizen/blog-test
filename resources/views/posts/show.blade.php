@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1> {{ $post->title }}</h1>
        <p> {{ $post->updated_at->toFormattedDateString() }}</p>
        <hr>
        <p>{{ $post->body }}</p>

        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}
                        </strong>
                        {{ $comment->body }}: &nbsp
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection