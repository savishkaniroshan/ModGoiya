<!DOCTYPE html>
<html>
<head>
    <title>Account View</title>
    <link rel="stylesheet" href="css/profile_view.css">
</head>
<body>
<?php include('nav-bar.php'); ?>
    <div class="container">
        <div class="background-image"></div>
        <div class="content">
    <div class="Topic">Account View</div>
    <div class="account">
        <table class="Account Details">
            <tr>
                <td rowspan="8" class="profile-pic"> <img src="assets/profile.jpg" alt="Profile Picture" width="200px" height="auto"></td>
                <td class="Details">Name</td>
                <td>Farmer</td>
            </tr>
            <tr>
                <td class="Details">Email</td>
                <td rowspan="7"></td>
            </tr>
            <tr>
                <td class="Details">telephone Number</td>
            </tr>
            <tr>
                <td class="Details">Gender</td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
                <td class="Log-out"><button class="LogOut" type="submit">Log_Out</button></td>
            </tr>
        </table>
    </div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
