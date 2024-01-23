@extends('layout.layout')
@section('content')
<h1> Data stored</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  
  <tbody>
    @foreach($products as $product)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td><img src='{{$product->image}}' width='100px' height='100px'></td>
      <td><a href="{{route('editDairy',['id'=>$product->id])}}">Edit</a></td>
      <td><a href="{{route('deleteDairy',['id'=>$product->id])}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>




@endsection