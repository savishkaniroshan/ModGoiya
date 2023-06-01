<?php
// This code part handles the item count of the cart and wishlist
// and also the switching of sign in and out buttons
session_start();
if (!isset($_SESSION['email'])) {
  $_SESSION['email'] = "";
}
if (isset($_GET['logout']) and ($_GET['logout'] == 1)) {
  session_destroy();
  unset($_SESSION['email']);
  header("location: log-in.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/nav-bar-styles.css">
</head>

<body>

  <!-- navigation bar -->
  <div class="logo" id="mylogo">
    <img src="assets/MOD GOIYA LOGO.png" alt="ModGoiya" class="logoi">
    <nav>
      <ul>
        <li><a href="post.php">create post</a></li>
        <li><a href="index.php"> Home</a></li>
        <li><a href="Category.php">Catogory</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="favorate.php">Favarite</a></li>
        <!-- <li><a href="log-in.php">Account</a></li>
        <li><a href="#">LOG OUT</a></li> -->

        <?php if ($_SESSION['email'] == "") { ?>
          <li><a href="log-in.php" class="custom-link">Log In</a></li>

        <?php } else { ?>
          <li><a href="log-out.php" class="custom-link">Log Out</a></li>
        <?php } ?>

      </ul>
      <?php if ($_SESSION['email'] != "") { ?>
        <h1 style="color:white;text-align:right;">Hi <span><?php echo $_SESSION["first_name"] ?> <?php echo $_SESSION["last_name"] ?>

          <?php } ?>


          </span></h1>
    </nav>
  </div>

  <script>
    window.onscroll = function() {
      myFunction()
    };

    var logo = document.getElementById("mylogo");
    var sticky = logo.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        logo.classList.add("sticky");
      } else {
        logo.classList.remove("sticky");
      }
    }
  </script>

</body>

</html>