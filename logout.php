<?php
session_start();
unset($_SESSION['user_email']);
session_destroy();
header("location:index.php?status=logout");
?>