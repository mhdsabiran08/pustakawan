<?php
session_start();
unset($_SESSION['untan']);
session_destroy();
header("Location:index.php");
?>