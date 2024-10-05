<?php
session_start();

// Destroy all session data
// session_unset();
session_destroy();

unset($_SESSION);

header("location:../index.php?message=You are logout successfuly..!");

exit;
?>
