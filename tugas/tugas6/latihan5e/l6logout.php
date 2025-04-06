<?php
session_start();
session_destroy();
header("Location: l6login.php");
exit();
?>