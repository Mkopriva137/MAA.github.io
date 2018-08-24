<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>MAA</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="shortcut icon"  type="image/png" href="maa logo.png">
    <link href="maa-styles.css" type="text/css" rel="stylesheet">
<style>
/*---------------My Code---------------*/
/*-------------------------------------*/
#mid-container{
    padding-top: 300px;
}

#mid-container form{
    display: block;
    height: 400px;
    width: 880px;
    margin: auto;
    background-color: rgba(34, 34, 34, 0.8);
    border:1px solid  rgb(255, 204, 37);
    border-radius: 5px;
}

.user-name{
    width: 200px;
    height: 50px;
    padding: 0px 20px;
    margin-right: 90px;
    margin-bottom: 10px;
    border: none;
    background-color: #ccc;
    font-family: Arial;
    font-size: 14px;
    color: #111;
    line-height: 30px;
    float: right;
}

.user-email{
    width: 200px;
    height: 50px;
    padding: 0px 20px;
    margin-right: 90px;
    margin-bottom: 10px;
    border: none;
    background-color: #ccc;
    font-family: Arial;
    font-size: 14px;
    color: #111;
    line-height: 30px;
    float: right;
}

#content{
    float: right;
    margin-top: -370px;
    margin-right: 60px;
    width: 400px;
}

#content h1{
    color: rgb(255, 204, 37);
    padding-bottom: 20px;
    font-family: Arial;
    font-size: 35px;
    margin-right: 20px;
}

#submit{
    background-color: #222;
    margin-left: 15%;
    margin-top: 20px;
    padding: 15px;
    color: rgb(255, 204, 37);
    font-family: Arial;
    border:3px solid  rgb(255, 204, 37);
    border-radius: 15px;
    cursor: pointer;
    font-size: 24px;
    width: 260px;
    margin-top: -1px;
}

#btn-profile{
    width: 100px;
}
</style>
</head>
<div id="container">
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="maa.php">Home&emsp;</a></li>
                <li><a href="maa-about-us-webp.php">About Us&emsp;</a></li>
                <li><a href="maa-store-webp.php">Store&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><h3>Martial Arts Academy - Sign Up</h3></li>
            </ul>
            <div class="nav-login">
            <?php
                if(isset($_SESSION['u_id'])){
                    echo '<form action="logout.php" method="post">
                        <button type="submit" name="submit">Logout</button>
                        </form>';
                }else{
                    echo '<form action="login.php" method="post">
                    <input type="text" name="email" placeholder="email">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="maa-sign-up.php">Sign Up</a>';
                    }
                ?>
            </div>
        </div>
    </nav>
</header>
<div id="mid-container">
    <form action="maa sign up.php" method="post">
        <div id="logo"><img id="logo" src="maa logo.png" height="375px" width="375px"
        style="border:3px solid  rgb(255, 204, 37); border-radius: 300px; margin:5px;"></img>
        </div>
        <div id="content">
            <h1><center>Fill in the following</center></h1>
            <input class="user-name" type="text" name="first" placeholder="First Name">
            <input class="user-name" type="text" name="last" placeholder="Last Name">
            <input class="user-email" type="text" name="email" placeholder="E-mail">
            <input class="user-email" type="text" name="pwd" placeholder="Password">
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>
    </form>
</div>
<footer>
    <div id="contact-info">
        <p>
            <h4>
                Contact us<br><br>
            </h4>
            Email: madt446@gmail.com<br><br>
            Phone: 747-332-1947
        </p>
        <div id="copyright">
                © 2018 - All Rights Reserved
        </div>
    </div>
</footer>
</body>
</div>
</html>