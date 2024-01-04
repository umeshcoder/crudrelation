@extends('layout.layout')
@section('content')
<form method="POST" action="{{route('editPost',['id'=>$products->id])}}" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
    <label for="name">Name</label><br>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="{{$products->name}}">
  </div>
  <br><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" rows="4" name="description" id="description" rows="3" >{{$products->description}}</textarea>
  </div><br>
  <div class="form-group">
    <label for="name">Price</label><br>
    <input type="text" class="form-control" id="price" name="price" aria-describedby="nameHelp" value="{{$products->price}}">
  </div><br>

  
    
    
    <button type="submit" class="btn btn-dark ">Submit</button><br><br>
    <div class="text-right">
        <a href="#">
          
            <button class="btn btn-primary" type="button" >Back</button>
        </a>
    </div>  

</form>




@endsection