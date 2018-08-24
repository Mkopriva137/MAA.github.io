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
    <link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
    <link href="maa-styles.css" type="text/css" rel="stylesheet">
<style>
/*-------------------------------------*/

#about-us{
    display: block;
    margin: 0 auto;
    height: 80%;
    text-align: center;
}

#text{
    display: inline-block;
    background-color: #222;
    color: rgb(255, 204, 37);
    font: 400 100px/1.3 'Arizonia', Helvetica, sans-serif;
    margin: 0 auto;
    text-align: center;
    padding: 10px;
}

#about-master{
    display: block;
    background-color: rgba(34, 34, 34, 0.822);
    color: rgb(255, 204, 37);
    width: 400px;
    font-family: Arial;
    word-wrap: break-word;
    text-align: center;
    font-size: 22;
    padding: 40px;
    margin: 0 auto;
}

#masterg{
    display: block;
    margin: 0 auto;
    height: 80%;
    text-align: center;
    margin-top: 40px;
    padding: 20px;
}

#text-geoff{
    display: block;
    background-color: rgba(34, 34, 34);
    color: rgb(255, 204, 37);
    width: 220px;
    font-family: Arial;
    font: 400 50px/1.3 'Arizonia', Helvetica, sans-serif;
    text-align: center;
    margin-bottom: 30px;
    padding: 15px;
    margin: 0 auto;
}

section img{
    padding:1px;
    border:1px solid  rgb(255, 204, 37);
}

#about-geoff{
    display: block;
    background-color: rgba(34, 34, 34, 0.822);
    color: rgb(255, 204, 37);
    width: 20%;
    font-family: Arial;
    word-wrap: break-word;
    text-align: center;
    font-size: 22;
    padding: 40px;
    margin-top: 20px;
    margin: 0 auto;
}

#julie{
    display: block;
    background-color: rgba(34, 34, 34);
    color: rgb(255, 204, 37);
    width: 220px;
    font-family: Arial;
    font: 400 50px/1.3 'Arizonia', Helvetica, sans-serif;
    text-align: center;
    padding: 15px;
    margin: 0 auto;
}

#julie-pic{
    display: block;
    margin: 0 auto;
    height: 80%;
    text-align: center;
    margin-top: 40px;
}

#julie-text{
    display: block;
    background-color: rgba(34, 34, 34, 0.822);
    color: rgb(255, 204, 37);
    width: 220px;
    font-family: Arial;
    word-wrap: break-word;
    text-align: center;
    font-size: 22;
    padding: 40px;
    margin: 0 auto;
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
                <li><h3>Martial Arts Academy - About Us</h3></li>
            </ul>
            <div class="nav-login">
            <?php
                    if(isset($_SESSION['u_email'])){
                        echo '<form action="maa-logged-in.php" method="POST">
                            <button type="submit" name="My Profile" id="btn-profile">My Profile</button>
                            </form>';
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

<section>
    <div id="about-us">
        <div id="text" style="margin-top: 100px;">
            Grandmaster Taylor
        </div><br><br>
        <img src="master.jpg"></img>
        <div id="about-master">
            Grandmaster Taylor has practiced and taught martial arts for more than 30 years.
            Two months ago, he decided to sell the business and retire to Tennessee so taught
            he could spend more time enjoying life and persuing one of his other passions,
            golf. Before leaving, he gave ownership of the academy to two of his black-belt 
            instructors, Geoff and Julie.
        </div>
    </div>
    <div id="masterg">
        <div id="text-geoff">
            Geoff
        </div><br><br>
        <img src="masterg.jpg" width=25% ></img>
        <div id="about-geoff">
            Geoff may be old but he is still kickin...literally
        </div><br><br><br><br>
        <div id="julie">Julie</div>
        <div id="julie-pic"><img src="julie.png" width=25%></img></div>
        <div id="julie-text">Chops her veggies with her hands</div>
    </div>
</section>

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