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
      
    </ul>
    
  </div>
</nav>  

<div class="container-fluid ">
    <div class="row">
        <div class="col-12">

            <form action="{{route("category.store")}}" method="post">
            @csrf
            @method("POST")
            <label for="name">Name:</label><br>
            <input type="text" name="name"><br><br>
            <label for="description">Description:</label><br>
            <input type="text" name="description"><br><br>
            <button type="submit" name="submit" value="ADD">Aggiungi</button>
            </form>
            </div>
        </div>
    </div>
    
@endsection