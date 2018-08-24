<?php
if (isset($_POST['submit']))
{
    include_once 'maa-db.php';

    $first = mysqli_real_escape_string($conn, $_POST['fname']);
    $last = mysqli_real_escape_string($conn, $_POST['lname']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    //error handlers
    //check for empty fields
    if(empty($first) || empty($last) || empty($date))
    {
        ?>
        <script>
        alert('Missing Information')
        window.location.href = 'maa-make-payment.php';</script>
        <?php
    }else
        {
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z--]*$/", $first) || !preg_match("/^[a-zA-Z--]*$/", $last))
        {
            ?>
            <script>
            alert('Invalid characters')
            window.location.href = 'maa-make-payment.php';</script>
            <?php
        }else
        {
            //insert user into database
            $sql = "INSERT INTO testform (user_first, user_last, user_testdate) 
            VALUES ('$first', '$last', '$date');";
            mysqli_query($conn, $sql);
            ?>
            <script>
            alert('Test Form Submitted')
            window.location.href = 'maa-logged-in.php';</script>
            <?php
        }
    }
}else
{
    ?>
    <script>
    alert('Error')
    window.location.href = 'maa-make-payment.php';</script>
    <?php
}