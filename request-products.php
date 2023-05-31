<!DOCTYPE html>
<html>
<head>
    <title>Product Request Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <link rel="stylesheet" href="css/request-products-styles.css">
    <title>Document</title>
</head>
<body>

<?php include('nav-bar.php'); ?>
<div class="full-box">
        <h2>Item Name</h2>
        <div class="container">
            <div class="left-side">
                        <img src="assets/producImg1.jpeg" alt="Product Image" width="100%" height="50%">
            </div>
             <div class="farmer">
                <p>Farmer</p>
                <P>Contact Number</P>
                <p class="locate">Location: City, Country</p>
            </div>
            <div class="right-side">
                <div class="form-box">
                    <div id= "postdetail">
                        <p>Quantity: 10</p>
                        <p>Price: $10 per kilo</p>
                    </div>
                    <section  class="description">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                   </section>
                    <label for="required-quantity">Required Quantity Size:</label>
                    <input type="number" id="required-quantity" name="required-quantity" placeholder="Enter required quantity size">
                    <div class="request-button">
                         <button type="submit">Send Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
