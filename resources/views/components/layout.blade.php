<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  @include('layout.header')
  <main class="container my-4">
    {{ $slot }}
  </main>
  @include('layout.footer')


</body>
</html>