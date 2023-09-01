<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiGeek College</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>

        <img src="/public/digigeek-logo.png" alt="DigiGeek College Logo">
    </header>
    <main>
        <div class="container">
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
        </div>
    </main>
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Contact Information</h3>
                        <p>
                            DigiGeek College<br>
                            123 College Street<br>
                            Techville, CA 12345<br>
                            Phone: (123) 456-7890<br>
                            Email: info@digigeekcollege.edu
                        </p>
                    </div>
    </footer>
    <!-- Add your scripts here -->
</body>
</html>
