<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>First Blog</title>
</head>
<body>
<div class="container-fluid">
    <div class="row globalLogOrNot">
        <div class="col-12">
            <div class="logOrNot">

                @auth
                 <a href={{route("yourlogin")}}>{{Auth::user() -> name}} </a> 
                @else
                    <a href="{{route("yourlogin")}}">Login</a>
                @endauth
            </div>
            
        </div>
    </div>
</div>
    
    @yield('content')
    @include('components.footer')
    
</body>
</html>