<!DOCTYPE html>
<html lang="en">
<Head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <link rel="stylesheet" href="css/auth-styles.css">
    <title>Log In</title>
</Head>
<body >

<div class="navb"><?php include('Hedder.php'); ?></div>


    <div class="login_form">
    <div class="container">
            <div class="selection">
                <div class="selection1">
                    <a href="Register.php"> <h2>Register</h2></a>
                </div>
               <div class="selection2">
                    <div class="reg">
                        <h2>Log in</h2>
                    </div>
               </div>
            </div>
        <form action="submit" method="get">
            <Table class="form-card">
                <tr>
                        <td class="card-text">
                                 <label for="username">User name</label>
                                 <input type="text" placeholder="Enter User name" name="uname" >
                        </td>
                </tr>
                <tr>
                        <td class="card-text">
                                 <label for="password">Password</label>
                                 <input type="password" placeholder="Enter a new password" name="password" >
                        </td>
                </tr>
                <tr class="logalert">
                    <td class="login-alert">
                        <p>If you haven't an account?  <a href="Register.php">Click here</a></p>
                    </td>
                 </tr>    
                <tr class="button-login">
                    <td class="login-button">
                        <button type="submit">Log in</button>
                    </td>
                </tr>
            </Table>
    </div>
    </div>
    <div class="navb"><?php include('footer.php'); ?></div>
</body>