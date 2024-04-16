<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet"/>
    <style>
        .footer {
            background-color: #F8F9FA;
            padding: 40px 0;
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
        .footer-col .social-links a {
            display: inline-block;
            margin-right: 20px;
            color: #6c757d;
            border: 0;
        }
    </style>
</head>
<body>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
