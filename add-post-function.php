<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php

  // Starting an new session for the login functionality
  session_start();

  // Creating an array for error messages
  $add_post_errors = array();

  // Database connection
  $db_connection = mysqli_connect('localhost', 'root', '', 'modgoiya') or die("could not connect to database");

  if (isset($_POST['add_new_post'])) {

  ?>

    <pre>
            <?php
            print_r($_POST);
            ?>
        </pre>

    <?php

    // Get the data from the $_POST variable
    // $photo_url = mysqli_real_escape_string($db_connection, $_POST['image']);
    $category = mysqli_real_escape_string($db_connection, $_POST['category']);
    $qty = mysqli_real_escape_string($db_connection, $_POST['qty']);
    $price_of_one_kilo = mysqli_real_escape_string($db_connection, $_POST['price_of_one_kilo']);
    $harvest_day = mysqli_real_escape_string($db_connection, $_POST['harvest_day']);
    $location_of_product = mysqli_real_escape_string($db_connection, $_POST['location_of_product']);
    $contact_number = mysqli_real_escape_string($db_connection, $_POST['contact_number']);
    $description = mysqli_real_escape_string($db_connection, $_POST['description']);

    echo "Print data from the variables";
    echo "*******************************";
    // echo "photo_url: ". $photo_url;
    echo $category;
    echo $price_of_one_kilo;
    echo $harvest_day;
    echo $location_of_product;
    echo $contact_number;
    echo $description;


    // Checking for errors
    if (empty($category)) {
      array_push($add_post_errors, "category is required");
    }
    if (empty($qty)) {
      array_push($add_post_errors, "qty is required");
    }
    if (empty($price_of_one_kilo)) {
      array_push($add_post_errors, "price_of_one_kilo is required");
    }
    if (empty($harvest_day)) {
      array_push($add_post_errors, "harvest_day is required");
    }
    if (empty($location_of_product)) {
      array_push($add_post_errors, "location_of_product is required");
    }
    if (empty($contact_number)) {
      array_push($add_post_errors, "contact_number is required");
    }
    if (empty($description)) {
      array_push($add_post_errors, "description is required");
    }

    // File path to upload the image files of the adveristments
    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $temp_name = $_FILES['image']['tmp_name'];
    $upload_to = 'assets/vegetables';

    // Check file extention
    if (!($file_type == "image/gif" or $file_type == "image/png" or $file_type == "image/jpeg" or $file_type == "image/JPEG" or $file_type == "image/PNG" or $file_type == "image/GIF")) {
      $book_errors[] = 'Only JPEG files are allowed.';
    }

    // Check file sizeෆ
    if ($file_size > 500000) {
      $book_errors[] = 'File size should be less than 500kb.';
    }

    // Full path to upload the image file
    $image_path = $upload_to . $file_name;

    // If no errors are encountered then
    // save post in the database
    if (count($add_post_errors) == 0) {

      $file_uploaded = move_uploaded_file($temp_name, $image_path);

      // Write user data to the database
      $query_to_write_add_data = "INSERT INTO advertisements (title, description, email, quntity, unit_price, location, image_url) VALUES ('$category', '$description', '{$_SESSION['email']}', '$qty', '$price_of_one_kilo', '$location_of_product', '$image_path')";

      // executing the above quory 
      mysqli_query($db_connection, $query_to_write_add_data);

    ?>

      // Show a success message
      <script>
        Swal.fire({
          icon: 'success',
          title: 'Post Added Success',
          text: 'Successfully Added the Post',
          confirmButtonText: "ok",
        })
      </script>

  <?php
      header('location: index.php');
    }
  } ?>




  ?>
</body>

</html>