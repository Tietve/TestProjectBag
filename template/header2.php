<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CHIP.VN - Handbags & Accessories</title>
    <!-- Bootstrap CSS -->
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <!-- Additional CSS for icons -->
    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <!-- Custom styles -->
    <style>
        .navbar {
            padding: 0.5rem 1rem;
            justify-content: space-between;
        }
        .navbar-nav {
            flex-direction: row;
        }
        .nav-item:not(:last-child) {
            margin-right: 1rem;
        }
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
        }
        .nav-icons {
            font-size: 1.25rem;
            cursor: pointer;
        }
        .nav-icons:not(:last-child) {
            margin-right: 1rem;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CHIP.VN</a>
    <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"
                >New! <span class="sr-only">(current)</span></a
                >
            </li>
            <li class="nav-item dropdown">
                <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                >
                    Túi xách

                </a>

                <!-- Dropdown menu items -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Xem tất cả</a>
                    <a class="dropdown-item" href="#">Túi Hàng Độc</a>
                    <a class="dropdown-item" href="#">Túi đeo chéo</a>
                    <a class="dropdown-item" href="#">Túi công sở</a>
                    <a class="dropdown-item" href="#">Túi Bigsize</a>
                    <a class="dropdown-item" href="#">Túi hàng hiệu xuất khẩu</a>
                    <a class="dropdown-item" href="#">Túi Du Lịch</a>
                    <a class="dropdown-item" href="#">Túi Laptop</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                >
                    Balo
                </a>
                <!-- Dropdown menu items -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Xem tất cả</a>
                    <a class="dropdown-item" href="#">Túi Hàng Độc</a>
                    <a class="dropdown-item" href="#">Túi đeo chéo</a>
                    <a class="dropdown-item" href="#">Túi công sở</a>
                    <a class="dropdown-item" href="#">Túi Bigsize</a>
                    <a class="dropdown-item" href="#">Túi hàng hiệu xuất khẩu</a>
                    <a class="dropdown-item" href="#">Túi Du Lịch</a>
                    <a class="dropdown-item" href="#">Túi Laptop</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bóp ví</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
        </ul>
        <form class="form-inline">
            <button class="btn btn-outline-light text-dark my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-outline-light text-dark my-2 my-sm-0" type="submit">
                <i class="fas fa-user"></i>
            </button>
            <button class="btn btn-outline-light text-dark my-2 my-sm-0" type="submit">
                <i class="fas fa-shopping-cart"></i>
            </button>
        </form>
    </div>
</nav>

<!-- Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
