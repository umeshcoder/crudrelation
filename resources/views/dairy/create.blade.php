<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chamena.com</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            padding-top: 56px;
            /* background-image:"{{asset('storage/food.jpg')}}"; */
            background-size: cover;
            background-position: center;
            
        }

        @media (min-width: 768px) {
            body {
                padding-top: 80px;
            }
        }
    </style>
</head>

<body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            
            <a class="navbar-brand" href="#">Chamena</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('item')}}">item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">sign in</a>
                    </li>
                </ul>
            </div>
            
           
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Welcome to Your Restaurant</h1>
                <p class="lead">Delicious food awaits you!</p>
                <img src ="{{asset('storage/food.jpg')}}">
            </div>
            
        </div>
        
        
        
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
