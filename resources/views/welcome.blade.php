<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
</head>
<body>
    <ul>
        <li><a href="{{route('home')}}">home</a></li>
        <li><a href="{{route('about')}}">about</a></li>
        <li><a href="{{route('other')}}">other</a></li>
        <li><a href="{{route('sosmed')}}">sosmed</a> </li>
 
    </ul>
    <div>
        @yield('pagesone')
    </div>
</body>
</html>