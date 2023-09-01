<main>
    <div class="container mx-auto p-4">
        <form method="POST" action="{{ route('posts.store') }}" class="bg-yellow-200 p-4 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="headline" class="block text-gray-700 font-semibold">Headline</label>
                <input type="text" name="headline" class="form-input rounded-md border-gray-300" required>
            </div>
            <div class="mb-4">
                <label for="author_name" class="block text-gray-700 font-semibold">Author Name</label>
                <input type="text" name="author_name" class="form-input rounded-md border-gray-300" required>
            </div>
            <div class="mb-4">
                <label for="body_text" class="block text-gray-700 font-semibold">Body Text</label>
                <textarea name="body_text" class="form-textarea rounded-md border-gray-300" required></textarea>
            </div>
            <div class="mb-4">
                <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
            </div>
            <button type="submit" class="bg-indigo-700 text-white rounded-full px-4 py-2 hover:bg-indigo-600 transition duration-300">Submit Post</button>
        </form>
    </div>
    
</main>