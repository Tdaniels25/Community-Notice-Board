<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div class="form-group">
        <label for="headline">Headline</label>
        <input type="text" name="headline" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="author_name">Author Name</label>
        <input type="text" name="author_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="body_text">Body Text</label>
        <textarea name="body_text" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
    </div>
    <button type="submit" class="btn btn-primary">Submit Post</button>

</form>