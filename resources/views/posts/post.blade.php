<div class="blog-post">
            <h2 class="blog-post-title"> 
                <a href="/posts/{{ $post->id}}">{{ $post->title }}</a>
            </h2>

            <p class="blog-post-meta"> {{ $post->updated_at->toFormattedDateString() }} </p>
            <hr>
            <p> {{ $post->body }}</p>
            
          </div><!-- /.blog-post -->