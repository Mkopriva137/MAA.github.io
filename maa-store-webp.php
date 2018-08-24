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

/*---------------header---------------*/
header nav{
    width: 100%;
    height: 60px;
    background-color: #fff;
    position: fixed;
    z-index: 10;
}
/*------------------------------------*/

#mid-container{
    padding-top: 100px;
    padding-bottom: 20px;
}

#mid-container form{
    display: block;
    height: 630px;
    width: 1500px;
    margin: auto;
    background-color: rgba(34, 34, 34, 0.5);
    border:1px solid  rgb(255, 204, 37);
    border-radius: 5px;
}

.item p{
    display: inline-block;
    padding-left: 40px;
    padding-right: 30px;
    vertical-align: 70px;
}

#btnBuy{
    float: right;
    font-family: Arial;
    border:3px solid  rgb(255, 204, 37);
    border-radius: 15px;
    cursor: pointer;
    font-size: 28px;
    margin-right: 40px;
    padding: 20px;
    margin-top: 45px;
}

.item{
    background-color: rgba(34, 34, 34, 0.8);
    padding: 10px;
    margin: 10px;
    border:1px solid  rgb(255, 204, 37);
    border-radius: 5px;
    color: white;
}

.item ul li{
    margin-left: 50px;
    margin-top: 13px;
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
                <li><h3>Martial Arts Academy - Store</h3></li>
            </ul>
            <div class="nav-login">
            <?php
                    if(isset($_SESSION['u_email'])){
                        echo '<form action="logout.php" method="POST">
                            <button type="submit" name="submit" id="logout-btn">Logout</button>
                            </form>';
                    }else{
                        echo '<form action="login.php" method="POST">
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
<form>
    <div class="item">
        <img src="store1.jpg"></img>
        <p>A wall mounted belt holder
            <ul style="display: inline-block;">
                <li>Custom Nameplate</li>
                <li>Accomodates up to 8 belts</li>
                <li>18.5"W x 23 3/4"H x 3/4"D</li>
                <li>Includes pre-installed wall mounting</li>
                <li>Assembly required</li>
                <li>Belts not included</li>
            </ul>
        </p>
        <p>
            Price<br>
            $45.99
        </p>
        <input id="btnBuy" type="button" name="buy" value="Buy">
    </div>

    <div class="item">
            <img src="store2.jpg" height="165px" width="165px"></img>
            <p>Nunchaku
                <ul style="display: inline-block; margin-left: 110px;">
                    <li>Dragon Design</li>
                    <li>Made of solid wood</li>
                    <li>12"L 1"D</li>
                    <li>7-link chain connection</li>
                    <li>Imported</li>
                    <li>Very dangerous</li>
                </ul>
            </p>
            <p style="margin-left:85px">
                Price<br>
                $24.99
            </p>
            <input id="btnBuy" type="button" name="buy" value="Buy">
    </div>
    <div class="item">
            <img src="store3.PNG" height="165px" width="165px"></img>
            <p>Martial Arts Academy T-Shirt
                <ul style="display: inline-block; margin-left: -15px;">
                    <li>Our logo printed on front</li>
                    <li>100% cotton</li>
                    <li>Comes in all sizes</li>
                    <li>Available in other colors</li>
                    <li>Super dope</li>
                    <li>Comfy</li>
                </ul>
            </p>
            <p style="margin-left:75px">
                Price<br>
                $19.99
            </p>
            <input id="btnBuy" type="button" name="buy" value="Buy">
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