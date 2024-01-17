<!DOCTYPE html>
<html lang="en">
<head>
     
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<form action="{{route('register')}}" method="POST">
    @csrf 
    @if(session()->has('sucess'))
    <div class="alert alert-sucess" role="alert">
        {{session()->get('sucess')}}
    </div>
    @endif

<meta charset="UTF-8">
    <meta name="viewport" content="width=<form class="dropdown-menu p-4">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail2" class="form-label">Name</label>
      <input type="name" class="form-control" id="exampleDropdownFormEmail2" placeholder="Enter your name" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button><br><br>
    </form>
    <form action="{{route('login')}}">
    <button  type="submit" class="btn btn-primary">Sign in</button>
</form> 

    
</body>
</html>
 
