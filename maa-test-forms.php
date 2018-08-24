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
/*-------------------------------------------*/
.loginBox{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 860px;
    height: 115px;
    box-sizing: border-box;
    background: rgba(0,0,0,.8);
}

.user{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    position: absolute;
    top: calc(-100px/2);
    left: calc(50% - 50px);
}

#tab-container{
    align-content: center;
    margin: 0 auto;
    width: auto;
    margin-top: 50px;
    padding-left: 10px;
    padding-right: 10px;
}

#tab-container ul{
    float: left;
}

#tab-container ul li{
    float: left;
    padding-left: 30px;
    padding-right: 30px;
    list-style: none;
}

#tab-container a{
    display: block;
    width: 120px;
    height: 50px;
    border: 3px solid;
    border-radius: 15px;
    float: left;
    background-color: rgb(255, 204, 37);
    font-family: Arial;
    font-size: 16px;
    color: #111;
    line-height: 63px;
    cursor: pointer;
}

#tabs{
    margin: 0 auto;
    display: table;
}

#welcome-container{
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 610px;
    height: 570px;
    border: 1px solid;
    border-radius: 10px;
    box-sizing: border-box;
    background: rgba(0,0,0,.8);
    margin-top: 370px;
}

#welcome-container h1{
    text-align: center;
    padding: 10px;
    color: rgb(255, 204, 37);
    font-size: 32px;
    font-family: Arial;
}

table{
    border: 1px solid;
    background-color: #ccc;
    border-radius:10px;
    overflow: scroll;
}
tr{
    border: 1px solid;
}
td{
    border: 1px solid;
    padding-left: 10px;
}
th{
    border: 1px solid;
    height:25px;
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
                <li><h3>Martial Arts Academy - Logged In</h3></li>
            </ul>           
            <div class="nav-login">
            <?php
                    if(isset($_SESSION['u_email'])){
                        echo '<form action="maa-instructor.php" method="POST">
                            <button type="submit" name="Admin View" id="btn-profile">Admin View</button>
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
    <div class="loginBox">
        <img src="maa logo.png" class="user">
        <div id="tabs">
        <div id="tab-container">
            <ul>
                <li><a href="maa-students.php">Students</a></li>
                <li><a href="maa-test-forms.php">Testing Forms</a></li>
                <li><a href="maa-update-student.php">Update Student Information</a></li>
            </ul>
        </div>
        </div>
    </div>
</section>

<section>
    <div id="welcome-container">
        <h1>Students</h1>
        <center>
        <table width="600" height="490" border="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date</th>
                <th>Belt</th>
            </tr>
            <?php
                include 'maa-db.php';
                $sql="SELECT * FROM testform";
                $records=mysqli_query($conn, $sql);
            while($class=mysqli_fetch_assoc($records)){
                echo "<tr>";
                echo "<td>".$class['user_first']."</td>";
                echo "<td>".$class['user_last']."</td>";
                echo "<td>".$class['user_testdate']."</td>";
                echo "<td>".$class['user_rank']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
        </center>
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