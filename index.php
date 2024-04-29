<?php

require_once 'template/templates.php';
require 'db.php'; // Kết nối với cơ sở dữ liệu

?>

<?=template_header('Home', 'main')?>

<div class="container">
    <div class="row product">
        <?php
        
        $sql = "SELECT productName, buyPrice, imageGallery, productAvailability FROM products";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Đưa dữ liệu của mỗi hàng vào trong HTML
            while($product = $result->fetch_assoc()) {
                echo "<div class='col-6 col-md-4 col-lg-3'>";
                echo "<div class='card'>";
                echo "<div class='ccc'>";
                echo "<p class='text-center'>";
                echo '<img src="./imgs/camera.jpg">';
                echo "</p>";
                echo "</div>";
                echo "<div class='card-body'>";
                echo "<h2>" . htmlspecialchars($product['productName']) . "</h2>";
                echo "<p class='price'>";
                if (!$product['productAvailability']) {
                    echo "<span class='sold-out'>Hết hàng</span>";
                } else {
                    echo "<span class='original'>" . htmlspecialchars($product['buyPrice']) . "</span><br>";
                    echo "<span>" . htmlspecialchars($product['buyPrice']) . "</span>";
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

<?=template_footer()?>

