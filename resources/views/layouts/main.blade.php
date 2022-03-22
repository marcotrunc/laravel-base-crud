<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC COMICS | @yield('title-section')</title> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" /> <!--Qui -->
</head>
<body>
    {{-- Header --}}
   @include('includes.header')

   {{-- Jumbo --}}
   @yield('bg-jumbo')

   {{-- Main --}}
   @yield('content-main')
   {{-- Footer --}}
   @include('includes.footer')
  
   <script src="{{asset('js/app.js')}}"></script>
</body>
</html>