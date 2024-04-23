<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang Chủ - CHIP.VN</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet"/>
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .product {
            
            margin: 10px;
            padding: 10px;
            display: inline-block;
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
            max-width: 250px; 
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
        }

    </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Header2 link -->
    <?php include "template/header.php"?>
<div class="container">
<div class="row product">
    <?php
    require 'db.php'; // Kết nối với cơ sở dữ liệu
    
    $sql = "SELECT productName, buyPrice, productAvailability FROM products";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Đưa dữ liệu của mỗi hàng vào trong HTML
        while($product = $result->fetch_assoc()) {
            echo "<div class='col-md-4'>";
            echo "<div class='card'>";
            echo "<div class='ccc'>";
            echo "<p class='text-center'>";
           //echo '<img src="data:image/jpg;base64,'.base64_encode($product['imageGallery']).'" class="imw">';
            echo "</p>";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<h2>" . htmlspecialchars($product['productName']) . "</h2>";
            echo "<p class='price'>";
            if (!$product['productAvailability']) {
                echo "<span class='sold-out'>Hết hàng</span>";
            } else {
                echo "<span>" . htmlspecialchars($product['buyPrice']) . "</span>";
                echo "<span class='original'>" . htmlspecialchars($product['buyPrice']) . "</span>";
            }
            echo "<p class='text-center'><input type='submit' name='Save' value='Buy' class=' cc1'></p>";
            echo "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "Không có sản phẩm nào.";
    }
    $conn->close();
    ?>
</div>
</div>

</body>
    <!-- Footer link -->
    <?php include "template/footer.php"?>
</html>