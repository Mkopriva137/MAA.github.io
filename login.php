<?php
session_start();

if(isset($_POST['submit'])){
    include 'maa-db.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    
    //error check handlers
    //check for empty inputs
    if(empty($email) || empty($pwd)){?>
        <script>
        alert('Missing email/password')
        window.location.href = 'maa.php';</script>
        <?php
        header("LOCATION: maa.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck<1){?>
            <script>
            alert('Error-email')
            window.location.href = 'maa.php';</script>
            <?php
            header("LOCATION: maa.php?login=error-email");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if($hashedPwdCheck==false){?>
                    <script>
                    alert('Incorrect Password')
                    window.location.href = 'maa.php';</script>
                    <?php
                    header("LOCATION: maa.php?login=error-pw");
                    exit();
                }elseif($hashedPwdCheck==true){ 
                    //log in the user here
                    $_SESSION['u_id']=$row['user_id'];
                    $_SESSION['u_first']=$row['user_first'];
                    $_SESSION['u_last']=$row['user_last'];
                    $_SESSION['u_email']=$row['user_email'];
                    if($_SESSION['u_email']=='admin@gmail.com'){
                        ?>
                        <script>
                        alert('Login Successful')
                        window.location.href = 'maa-instructor.php';</script>
                        <?php
                    }else{
                    ?>
                    <script>
                    alert('Login Successful')
                    window.location.href = 'maa-logged-in.php';</script>
                    <?php
                    header("LOCATION: maa-logged-in.php?login=success");
                    exit();
                    }
                }       
            }
        }
    }
}else{
    header("LOCATION: maa.php?login=error-else");
    exit();
}