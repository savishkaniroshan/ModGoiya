<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "audible";
$db = new mysqli($servername, $username, $password, $dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$book_errors = array();
if (isset($_POST['_submit'])) {

    print_r($_POST);

    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $temp_name = $_FILES['image']['tmp_name'];
    $upload_to = '../img/covers/';
    // $upload_to2 = 'img/covers/';

    if (!($file_type == "image/gif" or $file_type == "image/png" or $file_type == "image/jpeg" or $file_type == "image/JPEG" or $file_type == "image/PNG" or $file_type == "image/GIF")) {
        $book_errors[] = 'Only JPEG files are allowed.';
    }

    if ($file_size > 500000) {
        $book_errors[] = 'File size should be less than 500kb.';
    }

    $book_register = date("Y-m-d h:i:sa");
    $book_image = $upload_to . $file_name;
    $book_name = mysqli_real_escape_string($db, $_POST['book_name']);
    $book_catagory = mysqli_real_escape_string($db, $_POST['book_catagory']);
    $book_author = mysqli_real_escape_string($db, $_POST['book_author']);
    $book_price = mysqli_real_escape_string($db, $_POST['book_price']);
    $book_qty = mysqli_real_escape_string($db, $_POST['book_qty']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $id = mysqli_real_escape_string($db, $_SESSION['id']);

        $file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name);
        $insert_query = "INSERT INTO book (book_name, book_catagory, book_author, book_price, book_qty, book_image, book_register, description, id) VALUES ('$book_name', '$book_catagory', '$book_author', $book_price, $book_qty, '$book_image', '$book_register', '$description' ,$id)";

        if ($db->multi_query($insert_query) === TRUE) {
            echo "New records created successfully";
            $test2 = 'done';
        } else {
            echo "Error: " . $insert_query . "<br>" . $db->error;
        }

        $cookie_name = "product_created";
        $cookie_value = "1";
        setcookie($cookie_name, $cookie_value, time() + (500), "/");

        header('Location:listBook.php', replace: true);
        exit();
    }
