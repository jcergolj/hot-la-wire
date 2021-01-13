<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="module">
      import Turbo from 'https://cdn.skypack.dev/pin/@hotwired/turbo@v7.0.0-beta.2-ou6dW2bg0qdKgUED7QEB/min/@hotwired/turbo.js';
    </script>
</head>
</head>

<body>
    @yield('content')
</body>

</html>
