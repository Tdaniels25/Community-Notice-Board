<body>

<div class= "container mx-auto p-4">
    <h1 class="text-3xl font-bold">Latest Posts</h1>


@if ($posts->isEmpty())
<p>No posts available.</p>
@else
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
    
    <div class="col-span-3 md:col-span-1 bg-white p-4 rounded-lg shadow">
        <h2 class="text-xl font-semibold">{{ $posts[0]->headline }}</h2>
        <p class="text-sm text-gray-500">Author: {{ $posts[0]->author_name }}</p>
        <p class="text-gray-800">{{ $posts[0]->body_text }}</p>
    </div>

    
    @foreach ($posts->slice(1)->chunk(3) as $chunk)
        <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
            @foreach ($chunk as $post)
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-xl font-semibold">{{ $post->headline }}</h2>
                    <p class="text-sm text-gray-500">Author: {{ $post->author_name }}</p>
                    <p class="text-gray-800">{{ $post->body_text }}</p>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

</body>