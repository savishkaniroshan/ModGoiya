<!-- Include the get data function-->
<?php require_once 'call-get-data-functions.php'; ?>

<?php
// All the advertistments
$all_ads;
?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/category-styles.css">


</head>

<body>
  <div class="navb"><?php include('nav-bar.php'); ?></div>
  <div class="container">
    <div class="background-image"></div>
    <div class="content">
      <div>

      </div>
      <div>

      </div>
      <div class="catagary_table">
        <table>



          <tr>
            <td class="Title" colspan="6">Vegetables</td>
          </tr>


          <tr>
            <?php foreach ($all_ads as $item) { ?>
              <?php if ($item['category'] == "vegetables") { ?>
                <td><img src="<?php echo $item['image_url'] ?>" id="catagary_img" alt="Image description"><br><a href="#"><?php echo $item['title'] ?></a></td>
              <?php } ?>
            <?php } ?>
          </tr>

        </table>
      </div>

      <div class="catagary_table">
        <table>

          <tr>
            <td class="Title" colspan="6">Fruits</td>
          </tr>
          <tr>
            <?php foreach ($all_ads as $item) { ?>
              <?php if ($item['category'] == "fruits") { ?>
                <td><img src="<?php echo $item['image_url'] ?>" id="catagary_img" alt="Image description"><br><a href="#"><?php echo $item['title'] ?></a></td>
              <?php } ?>
            <?php } ?>
          </tr>
        </table>
      </div>

      <div class="catagary_table">
        <table>

          <tr>
            <td class="Title" colspan="6">Other</td>
          </tr>

          <tr>
            <?php foreach ($all_ads as $item) { ?>
              <?php if (($item['category'] == "meat") || ($item['category'] == "seafood")  || ($item['category'] == "dairy")) { ?>
                <td><img src="<?php echo $item['image_url'] ?>" id="catagary_img" alt="Image description"><br><a href="#"><?php echo $item['title'] ?></a></td>
              <?php } ?>
            <?php } ?>
          </tr>

        </table>
      </div>
      <div>
      </div>
    </div>

  </div>
</body>

</html>