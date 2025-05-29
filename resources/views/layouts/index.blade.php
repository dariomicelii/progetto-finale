<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(["resources/sass/app.scss","resources/js/app.js"])
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center  flex-column py-4">
                <h1>
                    @yield('title')
                </h1>
                @yield('content')
            </div>
    </div>
</body>
</html>