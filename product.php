<?php

require_once 'template/templates.php';
require 'db.php';

if (isset($_GET['productCode'])) {
    $stmt = $conn->prepare('SELECT * FROM products WHERE productCode = ?');
    $stmt->bind_param('s', $_GET['productCode']);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();

    if (!$product) {
        exit('Product does not exist!');
    }
} else {
    exit('Product does not exist!');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    do {
        if (empty($name) || empty($email) || empty($feedback)) {
            $errorMsg = "All of the fields are required!";
            break;
        }

        // Insert new client to the database
        $sql = "INSERT INTO feedbacks (feedbackerName, feedbackerEmail, feedbackDescription, feedbackForProductCode) VALUES ('$name', '$email', '$feedback', '$address')";
        $result = $conn->query($sql);

        if (!$result) {
            $errorMsg = "Invalid query: " . $conn->error;
            break;
        }

        $name = "";
        $email = "";
        $phone = "";
        $address = "";

        $successMsg =  "Feedback successfully.";

    } while (false);
}

?>

<?=template_header('Home', 'product')?>

<div class="container mt-5">
        <!-- Section 1: Product basic information -->
        <div class="row">
            <!-- Gallery carousel -->
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <div id="productGallery" class="carousel slide rounded">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../imgs/camera.jpg" class="d-block w-100 h-100 img-fluid m-auto" alt="Camera" style="object-fit: contain;">
                        </div>
                        <div class="carousel-item">
                            <img src="../imgs/headphones.jpg" class="d-block w-100 h-100 img-fluid m-auto" alt="Headphones" style="object-fit: contain;">
                        </div>
                        <div class="carousel-item">
                            <img src="../imgs/wallet.jpg" class="d-block w-100 h-100 img-fluid m-auto" alt="Wallet" style="object-fit: contain;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productGallery" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productGallery" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Product info -->
            <div class="col-md-6 col-12 d-flex flex-column justify-content-between">
                <div class="p-4">
                    <h2><?=$product['productName']?></h2>
                    <h3><?=$product['buyPrice']?></h3>
                    <p><?=$product['productCategory']?></p>
                </div>
                <div class="text-center mb-5">
                    <a href="add_to_cart_page.html" class="btn btn-primary my-2 p-2 product-btn">Add to Cart</a>
                    <a href="add_to_favorite_page.html" class="btn btn-dark my-2 p-2 product-btn">Add to Favorite</a>
                </div>
            </div>            
        </div>
        <div class="row">
            <!-- Section 2: Description -->
            <div class="col-12 section">
                <h4>Description</h4>
                <p><?=$product['productDescription']?></p>
            </div>
        </div>
        <div class="row">
            <!-- Section 3: Feedbacks -->
            <div class="col-12 section">
                <h4>Leave a Feedback</h4>
                <div class="row">
                    <form method="post" class="col-lg-6">
                        <div class="row">
                            <div class="form-group col-12 col-md-6">
                                <label class="mt-2" for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" >
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label class="mt-2" for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label class="mt-2" for="feedback">Feedback:</label>
                                <textarea class="form-control" id="feedback" name="feedback" rows="4"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit Feedback</button>
                    </form>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h4 class="mt-5">Recent feedbacks</h4>
                        <div class="feedback-container">
                            <div class="feedback">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="feedback-user">John Doe</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        "Great product, highly recommended!"
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedback-container">
                            <div class="feedback">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="feedback-user">Jane Smith</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        "Good quality, fast delivery."
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=template_footer()?>