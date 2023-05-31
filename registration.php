<!DOCTYPE html>
<html lang="en">

<Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <link rel="stylesheet" href="css/auth-styles.css">
    <title>Register</title>
</Head>

<body>


    <div class="navb"><?php include('nav-bar.php'); ?></div>
    <div class="f">

        <div class="login_form">
            <div class="container">
                <div class="selection">
                    <div class="selection1">
                        <div class="reg">
                            <h2>Register</h2>
                        </div>
                    </div>
                    <div class="selection2">
                        <a href="log-in.php">
                            <h2>Log in</h2>
                        </a>
                    </div>
                </div>
                <form action="registration-function.php" method="post">
                    <table class="content">
                        <tr class="form-data">
                            <td class="input-box">
                                <div class="input-lable"><label for="firstname">First name</label></div>
                                <input type="text" placeholder="Enter your First name" name="fname" required>
                            </td>
                            <td class="input-box">
                                <div class="input-lable"><label for="lastname">Last name</label></div>
                                <input type="text" placeholder="Enter Last name" name="lname" required>
                            </td>
                        </tr>
                        <tr class="form-data">
                            <td class="input-box">
                                <div class="input-lable">
                                    <div class="input-lable"><label for="email">Email</label></div>
                                    <input type="email" placeholder="Enter your valid email address" name="email" required>
                            </td>
                            <td class="input-box">
                                <div class="input-lable"><label for="phonenumber">Phone number</label></div>
                                <input type="tel" placeholder="Enter your phone number" name="phoneNumber" required>
                            </td>
                        </tr>
                        <tr class="form-data">
                            <td class="input-box">
                                <div class="input-lable"><label for="password">Password</label></div>
                                <input type="password" placeholder="Enter a new password" name="password" required>
                            </td>
                            <td class="input-box">
                                <div class="input-lable"><label for="cpassword">Confirm Password</label></div>
                                <input type="password" placeholder="Confirm your password" name="Confirmpassword" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="gender-title">Gender</td>
                        </tr>
                        <tr>
                            <td class="Gender-category">
                                <input type="radio" name="gender" id="male" required>
                                <label for="Gender">Male</label>
                                <input type="radio" name="gender" id="fmale" required>
                                <label for="Gender">Female</label>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td class="proficien-title">who are you using this as?</td>
                        </tr>
                        <tr>
                            <td class="proficien">
                                <input type="radio" name="isFarmer" id="seller" required>
                                <label for="proficien">Seller</label>
                                <input type="radio" name="isFarmer" id="buyer" required>
                                <label for="proficien">Buyer</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="alert" colspan="2">
                                <p>If you already have an account? <a href="log-in.php">Click here</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td class="button-container" colspan="2">
                                <button type="submit" name="register_user">Register</button>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
    <div class="navb"><?php include('footer.php'); ?></div>

</body>