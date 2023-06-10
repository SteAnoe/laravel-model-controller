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
        
        @foreach($movies as $key=>$movie)
            @if(isset($films[$key]['url']))
            <div class="card">
                
                <img class="card-img-top" src="{{$films[$key]['url']}}" alt="">
                
                <h2 class="text-white">{{$movie['title']}}</h2>
                <h6>{{$movie['original_title']}}</h6>
                <h6>Lang: <span class="text-white">{{$movie['nationality']}}</span></h6>
                <h6>Release: <span class="text-white">{{$movie['date']}}</span></h6>
                <h6>Vote: <span class="text-white">{{$movie['vote']}}</span></h6>
            </div>  
            @endif  
        @endforeach 
        
    </div> 
</body>

</html>