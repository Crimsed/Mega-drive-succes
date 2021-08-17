<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon super site</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class=" bg-gray-300 font-serif">
    <h1 class=" flex justify-center text-5xl py-8" >Mega drive succes</h1>
    @include('partials.navbar')
    @yield('content')
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>