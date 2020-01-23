@extends('layouts.base')
@section("content")

<nav class="navbar navbar-expand-lg bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route("home.index")}}"><i class="fas fa-home"></i><span class="sr-only">(current)</span></a>
      </li>
      @foreach ($categories as $category)
      <li class="nav-item">
        <a class="nav-link" href="{{route("category.show",$category-> id)}}">{{$category -> name}}</a>
      </li>
        @endforeach
      
    </ul>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
      @auth
          
      <a class="nav-link" href={{route("category.create")}}>AGGIUNGI CATEGORIA <i class="fas fa-plus"></i> </a>
      @else
      <p class="nav-link blur"> AGGIUNGI CATEGORIA <i class="fas fa-plus"></i> </p> <p class="nav-link"> Per sbloccare questa funzione <a href="{{ route('login') }}"> accedi</a></p> 
      @endauth
        <div class="col-12">

            @foreach ($categories as $category)
            <h5>{{$category -> name}}</h5>
            @auth
                
            <a class="nav-link" href={{route("category.post",$category->id)}}>AGGIUNGI Post <i class="fas fa-plus"></i> </a>
             @else
              <p class="nav-link blur"> AGGIUNGI POST <i class="fas fa-plus"></i> </p> <p class="nav-link"> Per sbloccare questa funzione <a href="{{ route('login') }}"> accedi</a></p> 
            @endauth
                <div class="categories">
                @foreach ($category -> posts as $post)
                <div class="card" >
                    <img class="card-img-top" src="{{url($post -> pict)}}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">{{$post -> title}}</p>
                    </div>
                    </div>
               {{--  <div class="post">
            
                    
                </div> --}}
                
              
            
            @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection