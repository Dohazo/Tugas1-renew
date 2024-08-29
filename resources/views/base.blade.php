<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
   

  <div>
    
      @include('nav')  
  </div>
    
<div class>
    @yield('content')
</div>
</body>
</html>