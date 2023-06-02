<!-- Show favorites here -->

<?php require_once 'call-get-data-functions.php'; ?>

<?php
// All the advertistments
$all_favorites;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Mod-Goiya</title>
    <link rel="stylesheet" type="text/css" href="css/home-styles.css">
</head>

<body>

    <?php include('nav-bar.php'); ?>

    <?php foreach ($all_favorites as $fav) { ?>
        <div id="post">
            <table id="postt">
                <tr>
                    <td colspan="2" id="imagerow"><img src="assets/image001.jpg" width="70%" height="50%"></td>
                </tr>
                <tr>
                    <td id="iteamname" colspan="2"><?php echo $fav['title'] ?></td>
                </tr>
                <tr>
                    <td colspan="2" id="row">Quantity: <?php echo $fav['quntity'] ?></td>
                </tr>
                <tr>
                    <td colspan="2" id="row">rice: $<?php echo $fav['unit_price'] ?> per kilo</td>
                </tr>
                <tr>
                    <td colspan="2" id="row">Location: <?php echo $fav['location'] ?></td>
                </tr>

                <tr id="button" class="request-button">
                    <td id="reques"><button id="request">Request</button></td>

                </tr>

            </table>
        </div>

    <?php }
    ?>

    <!-- <div id="post">
        <table id="postt">
            <tr>
                <td colspan="2" id="imagerow"><img src="assets/image001.jpg" alt="Product Image" width="70%" height="50%"></td>
            </tr>
            <tr>
                <td id="iteamname" colspan="2">Item Name</td>
            </tr>
            <tr>
                <td colspan="2" id="row">Quantity: 10</td>
            </tr>
            <tr>
                <td colspan="2" id="row">rice: $10 per kilo</td>
            </tr>
            <tr>
                <td colspan="2" id="row">Location: City, Country</td>
            </tr>

            <tr id="button" class="request-button">
                <td id="reques"><button id="request">Request</button></td>
                
            </tr>

        </table>
    </div> -->

    <!-- <div id="post">
        <table id="postt">
            <tr>
                <td colspan="2" id="imagerow"><img src="assets/image001.jpg" alt="Product Image" width="70%" height="50%"></td>
            </tr>
            <tr>
                <td id="iteamname" colspan="2">Item Name</td>
            </tr>
            <tr>
                <td colspan="2" id="row">Quantity: 10</td>
            </tr>
            <tr>
                <td colspan="2" id="row">rice: $10 per kilo</td>
            </tr>
            <tr>
                <td colspan="2" id="row">Location: City, Country</td>
            </tr>

            <tr id="button" class="request-button">
                <td id="reques"><button id="request">Request</button></td>
                
            </tr>

        </table>
    </div> -->

    <!-- <div id="post">
        <table id="postt">
            <tr>
                <td colspan="2" id="imagerow"><img src="assets/image001.jpg" alt="Product Image" width="70%" height="50%"></td>
            </tr>
            <tr>
                <td id="iteamname" colspan="2">Item Name</td>
            </tr>
            <tr>
                <td colspan="2" id="row">Quantity: 10</td>
            </tr>
            <tr>
                <td colspan="2" id="row">rice: $10 per kilo</td>
            </tr>
            <tr>
                <td colspan="2" id="row">Location: City, Country</td>
            </tr>

            <tr id="button" class="request-button">
                <td id="reques"><button id="request">Request</button></td>
                
            </tr>

        </table>
    </div> -->

    <!-- <div id="post">
        <table id="postt">
            <tr>
                <td colspan="2" id="imagerow"><img src="assets/image001.jpg" alt="Product Image" width="70%" height="50%"></td>
            </tr>
            <tr>
                <td id="iteamname" colspan="2">Item Name</td>
            </tr>
            <tr>
                <td colspan="2" id="row">Quantity: 10</td>
            </tr>
            <tr>
                <td colspan="2" id="row">rice: $10 per kilo</td>
            </tr>
            <tr>
                <td colspan="2" id="row">Location: City, Country</td>
            </tr>

            <tr id="button" class="request-button">
                <td id="reques"><button id="request">Request</button></td>
                
            </tr>

        </table>
    </div> -->

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