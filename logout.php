<?php
    // echo 'logout nih';
    session_start();
    session_destroy();
    header("Location: login.php");
?>