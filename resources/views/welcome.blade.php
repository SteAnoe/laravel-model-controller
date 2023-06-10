<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        @foreach($movies as $movie)
            <div class="card">
                <h2 class="text-white">{{$movie['title']}}</h2>
                <h5>{{$movie['original_title']}}</h5>
                <h5>Lang: <span class="text-white">{{$movie['nationality']}}</span></h5>
                <h5>Release: <span class="text-white">{{$movie['date']}}</span></h5>
                <h5>Vote: <span class="text-white">{{$movie['vote']}}</span></h5>
            </div>    
        @endforeach 
    </div> 
</body>

</html>