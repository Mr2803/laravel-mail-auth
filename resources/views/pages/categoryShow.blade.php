@extends('layouts.base')
@section('content')
  
<h5>{{$category -> name}}</h5>
<h6>{{$category -> description}}</h6>
<a href="{{route("category.delete",$category -> id)}}"><i class="fas fa-trash"></i></a>
 <div class="categories">
    @foreach ($category -> posts as $post)
    <div class="card" >
        <img class="card-img-top" src="{{url($post -> pict)}}" alt="Card image cap">
        <div class="card-body">
        <p class="card-text">{{$post -> title}}</p>
        <p class="card-text">{{$post -> body}}</p>
        </div>
        </div>
    @endforeach
</div>
@endsection