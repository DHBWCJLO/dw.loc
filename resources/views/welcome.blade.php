<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Distributed WEB Application</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.navbar')

        <main class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="display-4">Welcome to Distributed WEB Application</h1>
                    <p class="lead mt-4">This is a simple Laravel application using Bootstrap for styling.</p>
                    <hr class="my-4">
                    <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
                </div>
            </div>
        </main>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container text-center">
                <span class="text-muted">&copy; {{ date('Y') }} Distributed WEB Application. All rights reserved.</span>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
