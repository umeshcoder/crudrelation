@extends('layout.layout')
@section('content')
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Items</span>
</nav>
<br> <br>
<form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
    <label for="name">Name</label><br>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter the item">
  </div>
  <br><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" rows="4" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div><br>
  <div class="form-group">
    <label for="name">Price</label><br>
    <input type="text" class="form-control" id="price" name="price" aria-describedby="nameHelp" >
  </div><br>
  
  <div class="form-group">
    <label for="image">image</label><br>
    <input type="file" class="form-control" id="image" name="image" aria-describedby="nameHelp" >
  </div><br>

    <button type="submit" class="btn btn-dark ">Submit</button><br><br>
    <div class="text-right">
        <a href="#">
          
            <button class="btn btn-primary" type="button" >Back</button>
        </a>
    </div>  

</form>
@endsection