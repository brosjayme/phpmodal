<?php
// $hostname = 'localhost';
// $name = '';
// $email = '';
// $mobile = '';
// $place = '';

$conn = new mysqli('localhost', 'root', '', 'modalphp');
if($conn){
    echo 'conection successfull';
}else{
    die(mysqli_error($conn));
}
?>