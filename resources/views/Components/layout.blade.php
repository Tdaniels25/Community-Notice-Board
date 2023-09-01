<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiGeek College</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <x-header/>
    {{ $slot }}


    <footer class="bg-brown-300 p-4">
            <div class="container mx-auto text-center text-black">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="font-bold">Contact Information</h3>
                        <p>
                            DigiGeek College<br>
                            123 College Street<br>
                            Techville, CA 12345<br>
                            Phone: (123) 456-7890<br>
                            Email: info@digigeekcollege.edu
                        </p>
                    </div>
    </footer>
   
</body>
</html>
