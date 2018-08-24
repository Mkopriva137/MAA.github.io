<?php
if (isset($_POST['submit']))
{
    include_once 'maa-db.php';

    $first = mysqli_real_escape_string($conn, $_POST['fname']);
    $last = mysqli_real_escape_string($conn, $_POST['lname']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);

    //error handlers
    //check for empty fields
    if(empty($first) || empty($last) || empty($class))
    {
        ?>
        <script>
        alert('Missing Information')
        window.location.href = 'maa-class-signup.php';</script>
        <?php
    }else
        {
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z--]*$/", $first) || !preg_match("/^[a-zA-Z--]*$/", $last)|| !preg_match("/^[a-zA-Z--]*$/", $class))
        {
            ?>
            <script>
            alert('Invalid characters')
            window.location.href = 'maa-class-signup.php';</script>
            <?php
        }else
        {
            //insert user into database
            $sql = "INSERT INTO class (user_first, user_last, user_class) 
            VALUES ('$first', '$last', '$class');";
            mysqli_query($conn, $sql);
            ?>
            <script>
            alert('Congratulations! You are in!')
            window.location.href = 'maa-logged-in.php';</script>
            <?php
        }
    }
}else
{
    ?>
    <script>
    alert('Error')
    window.location.href = 'maa-class-signup.php';</script>
    <?php
}