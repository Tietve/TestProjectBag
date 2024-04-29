<?php

$main = <<< EOT
.product {
    margin: 10px;
    padding: 10px;
    text-align: center;
}
.product h2 {
    font-size: 18px;
    color: #333;
}
.product .price {
    font-size: 16px;
    color: #666;
}
.product .price .original {
    text-decoration: line-through;
}
.sold-out {
    color: red;
}
.product img {
    max-width: 100%; 
    height: auto; 
}

.heading{
    text-align: center;
    margin-top: 20px;
    text-decoration: underline;
}
.imw{
    width: 65%;
    position: relative;
}
.image {
    display: block;
    width: 100%;
    max-width: 250px;
    height: auto;
}
.text {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
}
.cc1{
    width: 82%;
    background: #fff;
    color: #000;
    padding: 4px 8px;
    border: 1px solid #000;
    height: 40px;
    border-radius: 7px;
}
@media only screen and (max-width: 553px) {
    .card{
    margin-top: 25px;
    }
}
.card{
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px #888888;
    margin: 10px;
}
EOT;

$product = <<< EOT
#productGallery {
    height: 75vh; 
    width: 50vw; 
    overflow: hidden;
}
.carousel-item {
    height: 75vh;
}
.carousel-control-prev:hover {
    background: linear-gradient(to left, rgba(255, 255, 255, 0), rgba(128, 128, 128, 0.3));
}
.carousel-control-next:hover {
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(128, 128, 128, 0.3));
}
.product-btn {
    width: 80%; 
    font-size: 20px;
}
.feedback-container {
    margin-top: 20px;
}
.section {
    width: 100%;
    margin-top: 40px;
}
.feedback {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px 16px;
    margin-bottom: 15px;
    background-color: #f9f9f9;
}
.feedback-user {
    font-weight: bold;
    color: #065fd4;
}
@media (max-width: 991.98px) {
    #productGallery {
        height: 50vh;
        width: 100%;
    }
    .carousel-item {
        height: 50vh
    }
}
EOT;

function template_header($title, $page) {
global $main, $product;
$css = $page == 'main' ? $main : $product;
$html = <<< EOT
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>$title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Header CSS */
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
        }

        /* Footer CSS */
        .footer {
            background-color: #F8F9FA;
            padding: 40px 0;
            margin-top: 40px;
        }
        .footer-col {
            margin-bottom: 30px;
        }
        .footer-col h4 {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #031249;
        }
        .footer-col ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }
        .footer-col ul li a {
            color: #6c757d;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-col ul li a:hover {
            color: #031249;
        }
        .social-links a {
            display: inline-block;
            margin-right: 20px;
            color: #6c757d;
            border: 0;
        }

        /* Content CSS */
        $css
    </style>
</head>
<body>
<!-- Navbar content -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">BagBag</a>
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
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-light text-dark my-2 my-sm-0 me-2">
                <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-outline-light text-dark my-2 my-sm-0 me-2">
                <i class="fas fa-user"></i>
            </button>
            <button class="btn btn-outline-light text-dark my-2 my-sm-0">
                <i class="fas fa-shopping-cart"></i>
            </button>
        </div>
    </div>
</nav>
EOT;
echo $html;
}

function template_footer() {
$html = <<< EOT
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-col">
                <h4>ĐĂNG KÝ BẢN TIN</h4>
                <p>Nhận ngay những chương trình ưu đãi độc quyền chỉ dành cho thành viên theo dõi email</p>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email của bạn">
                        <button class="btn btn-primary" type="submit">→</button>
                    </div>
                </form>
            </div>

            <div class="col-md-3 footer-col">
                <h4>KHÁM PHÁ CHIP.VN</h4>
                <ul>
                    <li><a href="#">Túi xách</a></li>
                    <li><a href="#">Balo</a></li>
                    <li><a href="#">Bóp ví</a></li>
                    <li><a href="#">Bộ sưu tập túi gấu</a></li>
                </ul>
            </div>

            <div class="col-md-3 footer-col">
                <h4>VỀ CHIP.VN</h4>
                <ul>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Tuyển dụng bán hàng</a></li>
                    <li><a href="#">Tuyển dụng Content</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-col">
                <h4>Địa chỉ</h4>
                <ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204340.34776898715!2d105.41198893929862!3d21.012077787605445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4cd376479b%3A0xbc2e0bb9db373ed2!2zOGEgVMO0biBUaOG6pXQgVGh1eeG6v3QsIE3hu7kgxJDDrG5oLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSAxMDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1712785336820!5m2!1svi!2s" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/yourkit.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
EOT;
echo $html;
}
?>