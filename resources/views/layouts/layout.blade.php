<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>To Do List</title>
  @vite('resources/css/app.css')
</head>

<body>
{{-- awal navbar --}}
@include('layouts.navbar')
{{-- akhir navbar --}}

{{-- awal content --}}
@yield('content')
{{-- akhir content --}}

{{-- awal footer --}}
@include('layouts.footer')
{{-- akhir footer --}}
</body>

</html>
