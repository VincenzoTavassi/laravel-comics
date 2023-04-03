<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('resources/js/app.js')
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts/partials/_header')
    <main>
        <section id="showcase">
        <div class="jumbotron"></div>
            @yield('comics')
        </section>
    </main>
    @include('layouts/partials/_footer')
</body>
</html>