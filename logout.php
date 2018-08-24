<?php

if (isset($_POST['submit'])){
    session_start();
    session_unset();
    session_destroy();
    ?>
        <script>
        alert('Logout Successful')
        window.location.href = 'maa.php';</script>
        <?php
    //header("Location: maa.php?logout=success");
    //exit();
}