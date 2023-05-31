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
  $errors = array();

  // Database connection
  $db_connection = mysqli_connect('localhost', 'root', '', 'modgoiya') or die("could not connect to database");

  /// Function to log in a user
  if (isset($_POST['login_user'])) {

    // Get the email address and password from the $_POST variable
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $password = mysqli_real_escape_string($db_connection, $_POST['password']);

    // Checking for errors
    if (empty($email)) {
      array_push($errors, "email is required");
    }
    if (empty($password)) {
      array_push($errors, "password is required");
    }

    // If no errors are encountered
    if (count($errors) == 0) {

      // encrypting the password
      $password = md5($password);

      // is there any user who is mactching with the entered credentials
      $query = "SELECT * FROM users WHERE email = '$email' AND password='$password'";

      // executing the above quoery 
      $results = mysqli_query($db_connection, $query);

      // if there are results
      if (mysqli_num_rows($results)) {

        // getting email addresses from the database
        $fetch_all_user_data = "SELECT * from users WHERE email = '$email' LIMIT 1";
        // executing the above query
        $results = mysqli_query($db_connection, $fetch_all_user_data);
        // put all user data into a temporary array
        $user = mysqli_fetch_assoc($results);

        // If the user data is found
        if ($user) {

          // putting all user data into a session variable
          $_SESSION['user_id'] = $user['user_id'];
          $_SESSION['first_name'] = $user['first_name'];
          $_SESSION['last_name'] = $user['last_name'];
          $_SESSION['email'] = $user['email'];
          $_SESSION['password'] = $user['password'];
          $_SESSION['tp'] = $user['tp'];
          $_SESSION['isFarmer'] = $user['isFarmer'];
          $_SESSION['gender'] = $user['gender'];
        }

        header('location: index.php');
      } else {
        //put a sweet alert here
        array_push($errors, "Wrong email/ password combination. Please try again");

  ?>
        <script>
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Invalid email and password.',
            confirmButtonText: "try again",
          })
        </script>
  <?php
      }
    }
  }
  ?>

</body>

</html>