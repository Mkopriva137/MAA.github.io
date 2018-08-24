<?php
//mysqli_connect("loginsystem","id5349962_mk2993","shipu!","id5349962_loginsystem");
if (isset($_POST['submit'])){
    include_once 'maa-db.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //error handlers
    //check for empty fields
    if(empty($first) || empty($last) || empty($email) || empty($pwd))
    {
        ?>
        <script>
        alert('Missing Information')
        window.location.href = 'maa-sign-up.php?signup=empty';</script>
        <?php
    }else{
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z--]*$/", $first) || !preg_match("/^[a-zA-Z--]*$/", $last)){
            ?>
            <script>
            alert('Invalid characters')
            window.location.href = 'maa-sign-up.php?signup=invalid=name';</script>
            <?php
        }else{
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                ?>
                <script>
                alert('Invalid Email')
                window.location.href = 'maa-sign-up.php?signup=invalid=email';</script>
                <?php
            }else{
                //check if email already exists
                $sql = "SELECT * FROM users WHERE user_email='$email'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    ?>
                    <script>
                    alert('Email already in use')
                    window.location.href = 'maa-sign-up.php?signup=email=taken';</script>
                    <?php
                }else{
                    //hash the password
                    $hashedpwd = password_hash ($pwd, PASSWORD_DEFAULT);
                    //insert user into database
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) 
                    VALUES ('$first', '$last', '$email', '$hashedpwd');";
                    mysqli_query($conn, $sql);
                    ?>
                    <script>
                    alert('Account Created!')
                    window.location.href = 'maa.php?signup=successful';</script>
                    <?php
                }
            }
        }
    }
}else{
    ?>
    <script>
    alert('Error')
    window.location.href = 'maa-sign-up.php?signup=error';</script>
    <?php
}
?>