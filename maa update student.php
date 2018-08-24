<?php
if (isset($_POST['submit']))
{
    include_once 'maa-db.php';

    $first = mysqli_real_escape_string($conn, $_POST['fname']);
    $last = mysqli_real_escape_string($conn, $_POST['lname']);
    $belt = mysqli_real_escape_string($conn, $_POST['belt']);
    $stripes = mysqli_real_escape_string($conn, $_POST['stripes']);

    //error handlers
    //check for empty fields
    if(empty($first) || empty($last) || empty($belt) || empty($stripes))
    {
        ?>
        <script>
        alert('Missing Information')
        window.location.href = 'maa-update-student.php';</script>
        <?php
    }else
        {
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z--]*$/", $first) || !preg_match("/^[a-zA-Z--]*$/", $last)|| !preg_match("/^[a-zA-Z--]*$/", $belt))
        {
            ?>
            <script>
            alert('Invalid characters')
            window.location.href = 'maa-update-student.php';</script>
            <?php
        }else
        {
            //update student info in database
            $sql="UPDATE class SET user_rank='$belt', user_stripes='$stripes' WHERE user_first='$first' && user_last='$last';";
            mysqli_query($conn, $sql);
            ?>
            <script>
            alert('Student Profile Updated')
            window.location.href = 'maa-update-student.php';</script>
            <?php
        }
    }
}else
{
    ?>
    <script>
    alert('Error')
    window.location.href = 'maa-update-student.php';</script>
    <?php
}