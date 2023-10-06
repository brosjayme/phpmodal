<?php 
//clear all session variables
session_unset();

//destroy the session
session_destroy();
echo "you've been logged out! see you next time.";

print_r($_SESSION);

?>