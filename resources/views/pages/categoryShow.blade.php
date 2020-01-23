@extends('layouts.base')
@section('content')
<nav class="navbar navbar-expand-lg bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route("home.index")}}"><i class="fas fa-home"></i><span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>    
<h5>{{$category -> name}}</h5>
<h6>{{$category -> description}}</h6>
<a href="{{route("category.delete",$category -> id)}}"><i class="fas fa-trash"></i></a>
 <div class="categories">
    @foreach ($category -> posts as $post)
    <div class="card" >
                    <img class="card-img-top" src="{{url($post -> pict)}}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">{{$post -> title}}</p>
                    </div>
                    </div>
    @endforeach
</div>
@endsection