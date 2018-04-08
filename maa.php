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

<style>
/* 
html5doctor.com Reset Stylesheet
v1.6.1
Last Updated: 2010-09-17
Author: Richard Clark - http://richclarkdesign.com 
Twitter: @rich_clark
*/

html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section { 
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

mark {
    background-color:#ff9;
    color:#000; 
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

hr {
    display:block;
    height:1px;
    border:0;   
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}






/*---------------My Code---------------*/
.main-wrapper{
    margin: 0 auto;
    width: auto;
    padding-left: 20px;
    padding-right: 20px;
}

html, body{
    margin: 0 auto;
    padding: 0;
    height: 100%;
    background: 
        linear-gradient(rgba(0,0,0,.5),
        rgba(0,0,0,.5)),
        url(karatebg.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-bottom: 120px;
    z-index: 1;
}

#container{
    min-height: 100%;
    position: relative;
}

a{
    text-decoration: none;
    padding-left: 15px;
}

/*---------------header---------------*/
header nav{
    width: 100%;
    height: 60px;
    background-color: #fff;
    position: fixed;
    z-index: 3;
}

header nav ul{
    float: left;
}

header nav ul li{
    float: left;
    list-style: none;
}

header nav ul li a{
    font-family: Arial;
    font-size: 16px;
    color: #111;
    line-height: 63px;
}

header .nav-login{
    float: right;
}

header .nav-login form{
    float: left;
    padding-top: 15px;
}

header .nav-login form input{
    float: left;
    width: 140px;
    height: 30px;
    padding: 0px 10px;
    margin-right: 10px;
    border: none;
    background-color: #ccc;
    font-family: Arial;
    font-size: 14px;
    color: #111;
    line-height: 30px;
}

header .nav-login form button{
    float: left;
    width: 60px;
    height: 30px;
    margin-right: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 10px;
    background-color: #f3f3f3;
    font-family: Arial;
    font-size: 14px;
    color: #111;
    cursor: pointer;
    text-align: center;
}

#logout-btn{
    float: left;
    width: 80px;
    height: 30px;
    margin-right: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 10px;
    background-color: #f3f3f3;
    font-family: Arial;
    font-size: 14px;
    color: #111;
    cursor: pointer;
    text-align: center;
    margin-left: 300%;
}


header .nav-login form button:hover{

    background-color: #ccc;
}

header .nav-login a{
    display: block;
    width: 60px;
    height: 60px;
    border: none;
    float: left;
    background-color: #fff;
    font-family: Arial;
    font-size: 16px;
    color: #111;
    line-height: 63px;
    cursor: pointer;
}

header nav ul li h3{
    padding: 15px;
    color: rgb(255, 204, 37);
    font-size: 30px;
    background-color: #222;
    bottom: 0px;
    font-family: Arial;
}

section #logo{
    display: block;
    padding-top: 220px;
    padding-left: 40px;
    position: absolute;
    height: 50%;
    width: 50%;
    z-index: 2;
}

section .main-info{
    min-height: 100%;
    position: relative;
    overflow: visible;
}

/*--------------footer---------------*/
footer{
    background-color: #222;
    padding: 0px;
    height: 120px;
    width: 100%;
    position: absolute;
    color: whitesmoke;
    bottom: -120px;
}

footer #contact-info h4{
    color: whitesmoke;
}

footer #contact-info{
    padding-top: 20px;
    padding-left: 20px;
    color: rgb(196, 204, 204)
}
footer #copyright{
    float: right;
    padding-right: 20px;
}

/*-------------------------------------*/

span{
    display: inline-block;
    background-color: #222;
    color: rgb(255, 204, 37);
    width: 12%;
    font-family: Arial;
    word-wrap: break-word;
    float: right;
    padding: 30px;
    margin-top: 180px;
    margin-right: 90px;
    border:1px solid  rgb(255, 204, 37);
    border-radius: 15px;
}

h2{
    font-size: 20px;
}

iframe{
    margin-top: 40px;
    margin-left: 53%;
}

#button{
    background-color: #222;
    margin-left: 61%;
    margin-top: 20px;
    padding: 30px;
    color: rgb(255, 204, 37);
    font-family: Arial;
    border:3px solid  rgb(255, 204, 37);
    border-radius: 15px;
    cursor: pointer;
    font-size: 28px;
}

.nav-login{
    width: 30%;
}

@media screen and (max-width:959px){
    #container{
        width:80%;
    }
    #video{
        width:80%;
    }
    h3{
        width:60%;
    }

}

#video{
    position: relative;
    width: 100%;
}


</style>
</head>

<div id="container">
<body>

<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="maa.html">Home&emsp;</a></li>
                <li><a href="maa about us.html">About Us&emsp;</a></li>
                <li><a href="maa store.html">Store&emsp;&emsp;&emsp;&emsp;</a></li>
                <li><h3>Martial Arts Academy - Home</h3></li>
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
                        <input type="text" name="pwd" placeholder="password">
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
    <div id="logo"><img src="maa logo.png" width="60%"  style="border:3px solid  rgb(255, 204, 37); border-radius: 300px;"   
        ></img></div>
    <div id="text">
        <span><h2><center>Body</center></h2><br>With age and experience level tailored workouts, 
        you will see your body improve as you gain physical strength.<br><br></span>

        <span><h2><center>Mind</center></h2><br>Teachers provide instruction on the various moves and 
        techniques beyond the execution to include useful application and context.</span>

        <span><h2><center>Spirit</center></h2><br>Spirit may be compared to character, following the 
        principles of the Japanese Samurai such as loyalty, courage, duty, and honor.</span>
    </div>
    <div id="video">
            <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/4uL6c_7ihqQ?rel=0&amp;start=14" 
            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <input type="button" name="submit" value="Sign Up Today!" id="button"
    onclick="location.href='maa sign up.html'">
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