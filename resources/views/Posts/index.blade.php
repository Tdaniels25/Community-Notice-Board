<h1>Latest Posts</h1>
@foreach ($posts as $post)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $post->headline }}</h5>
            <p class="card-text">Author: {{ $post->author_name }}</p>
            <p class="card-text">{{ $post->body_text }}</p>
        </div>
    </div>
@endforeach