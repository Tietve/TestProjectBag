<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Navigation Menu</title>
    <style>
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
        }
    </style>
</head>
<body>
<!-- Navbar content -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">Bag</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Túi xách
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Balo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bóp ví
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul>
        </div>
        <form class="d-flex justify-content-end">
            <button class="btn btn-outline-light text-dark my-2 my-sm-0 me-2" type="submit">
                <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-outline-light text-dark my-2 my-sm-0 me-2" type="submit">
                <i class="fas fa-user"></i>
            </button>
            <button class="btn btn-outline-light text-dark my-2 my-sm-0" type="submit">
                <i class="fas fa-shopping-cart"></i>
            </button>
        </form>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

