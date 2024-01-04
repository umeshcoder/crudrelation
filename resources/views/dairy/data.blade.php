@extends('layout.layout')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Number</th>
      <th scope="col">groupname</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($member as $mem)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$mem->name}}</td>
        <td>{{$mem->email}}</td>
        <td>{{$mem->number}}</td>
        <td>{{$mem->group->name}}</td>
        
    </tr>
    @endforeach
    </tbody>
</table>



    
</table>
@endsection