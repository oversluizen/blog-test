@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1> {{ $post->title }}</h1>
        <p class="blog-post-meta">{{ $post->user->name }} on  {{ $post->updated_at->toFormattedDateString() }}</p>
        <hr>
        <p>{{ $post->body }}</p>

        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }} by {{ $comment->user->name }}: &nbsp
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

       
        {{--  Add a comment  --}}

        <hr>

        @if (Auth::check())
        <div class="card">
            <div class="card-block">
                <form action="/posts/{{ $post->id }}/comments" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                    
                    <div class="form-group">
                        @include('layouts.errors')
                    </div>
                </form>
            </div>
        </div>
        @endif
        
        @if (!Auth::check())
        <div class="card">
            <div class="card-block">
                <p class="blog-post-meta">To make a comment: <a href="/login">Log in</a></p>
            </div>
        </div>
        @endif
    </div>
@endsection