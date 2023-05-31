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

    if (isset($_POST['register_user'])) {

    ?>

        <pre>
            <?php
            print_r($_POST);
            ?>
        </pre>

        <?php

        // Get the data from the $_POST variable
        $first_name = mysqli_real_escape_string($db_connection, $_POST['fname']);
        $last_name = mysqli_real_escape_string($db_connection, $_POST['lname']);
        $email = mysqli_real_escape_string($db_connection, $_POST['email']);
        $tp = mysqli_real_escape_string($db_connection, $_POST['phoneNumber']);
        $password = mysqli_real_escape_string($db_connection, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($db_connection, $_POST['Confirmpassword']);
        $gender = mysqli_real_escape_string($db_connection, $_POST['gender']);
        $isFarmer = mysqli_real_escape_string($db_connection, $_POST['seller']);

        // Checking for errors
        if (empty($first_name)) {
            array_push($errors, "first name is required");
        }
        if (empty($last_name)) {
            array_push($errors, "last name is required");
        }
        if (empty($email)) {
            array_push($errors, "email is required");
        }
        if (empty($tp)) {
            array_push($errors, "tp is required");
        }
        if (empty($password)) {
            array_push($errors, "password is required");
        }
        if (empty($confirm_password)) {
            array_push($errors, "confirm password is required");
        }
        if (empty($gender)) {
            array_push($errors, "gender is required");
        }
        if (empty($isFarmer)) {
            array_push($errors, "isFarmer is required");
        }

        // Quory to check is the user already exist in the database
        $user_check_query = "SELECT * from users WHERE email = '$email' LIMIT 1";

        // executing the above query
        $results = mysqli_query($db_connection, $user_check_query);

        // put all user data into a temporary array
        $user = mysqli_fetch_assoc($results);

        // If the user data is found
        if ($user) {

            // IF the user entered email address already exists in the database
            if ($user['email'] == $email) {
                array_push($errors, "email and email already exists");

        ?>

                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'This email and email already registered',
                    })
                </script>

    <?php
            }
        }

        if (count($errors) == 0) {

            // Hasing the password which is entered by the user
            $encrypted_password = md5($password);

            // Write user data to the database
            $query_to_write_user_data = "INSERT INTO users (first_name, last_name, email, password, tp, isFarmer, gender) VALUES ('$first_name', '$last_name', '$email', '$password', '$tp', false, '$gender')";

            // executing the above quory 
            mysqli_query($db_connection, $query_to_write_user_data);

            // putting all user data into a session variable
            $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['email'] = $email;
            $_SESSION['encrypted_password'] = $encrypted_password;
            $_SESSION['tp'] = $tp;
            $_SESSION['isFarmer'] = $isFarmer;
            $_SESSION['gender'] = $gender;

            header('location: index.php');
        }
    }
    ?>
</body>

</html>