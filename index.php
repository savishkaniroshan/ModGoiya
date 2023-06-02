<!-- This is the view to showcase the advertistments -->

<!-- Include the get data function-->
<?php require_once 'call-get-data-functions.php'; ?>

<?php
// All the advertistments
$all_ads;
?>

<?php

require_once ('favorites-function.php');

// Creating an instance from the DBController class
$db = new DBController();

$favorites = new Favorites($db);

if (isset($_POST['favorite_submit'])) {
  //call add to cart method
  $favorites->addToFavorite($_POST['user_id'], $_POST['add_id']);
}

if (isset($_POST['favorite_submit'])) {
    //call add to cart method
    $favorites->addToFavorite($_POST['user_id'], $_POST['add_id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Mod-Goiya</title>
    <link rel="stylesheet" type="text/css" href="css/home-styles.css">
    <script src="https://kit.fontawesome.com/69b0f7ac87.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <?php include('nav-bar.php'); ?>

    <?php foreach ($all_ads as $item) { ?>
        <div id="post">
            <table id="postt">
                <tr>
                    <td colspan="2">
                        <h3><a class="link" href="profile_view.php" style="text-decoration:none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <?php echo $item['email'] ?> </a></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="imagerow"><img src="<?php echo $item['image_url'] ?>" width="50%" height="40%"></td>
                </tr>
                <tr>
                    <td id="iteamname" colspan="2"><?php echo $item['title'] ?></td>
                </tr>
                <tr>
                    <td colspan="2" id="row">Quantity: <?php echo $item['quntity'] ?></td>
                </tr>
                <tr>
                    <td colspan="2" id="row">rice: $<?php echo $item['unit_price'] ?> per kilo</td>
                </tr>
                <tr>
                    <td colspan="2" id="row">Location: <?php echo $item['location'] ?></td>
                </tr>

                <tr id="button" class="request-button">
                    <form method="POST" action="index.php">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?? '1' ?>">
                        <input type="hidden" name="add_id" value="<?php echo $item['add_id'] ?? '1' ?>">
                        <input type="hidden" name="favorite_submit" value="1">
                        <td id="reques"><button id="request"> <a href="request-products.php" style="text-decoration:none">Request</a> </button></td>
                        <td id="reques"> <button id="favorites">Add to Favorites</button></td>
                    </form>
                </tr>


            </table>
        </div>
    <?php }
    ?>

    <div id="page">
        <ul>
            pages
            <a href="#1">1</a>
            <a href="#2">2</a>
            <a href="#3">3</a>
            <a href="#next">next</a>
        </ul>
    </div>>

    <?php include('footer.php'); ?>
</body>

</html>