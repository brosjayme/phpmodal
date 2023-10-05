<?php 
include("connection.php");

if( isset( $_POST["post_submit"])) {
function validateFormData($formData){
    $formData = trim( stripslashes ( htmlspecialchars ($formData)));
    return $formData;
}

$username = $email = $password = "";

if(!$_POST["username"]) {
    $nameError = "please enter your username <br>";
} else {
    $username = validateFormData($_POST["username"]);
}
if(!$_POST["email"]) {
    $emailError = "please enter your email <br>";
}else {
    $email = validateFormData($_POST["post_email"]);
}

if(!$_POST["password"]) {
    $passwordError = "please enter your email <br>";
}else {
    $password = validateFormData($_POST["password"]);
}

if($username && $email && $password){
$query = "INSERT INTO users (id, username, password, email, signup_date, biography)
VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, NULL)";


if( mysqli_query ($conn, $query)){
    echo "<div class='alert alert-success'>NEW entry recorded!!</div>";
} else {
    echo "Error: ". $query ."<br>". mysqli_error($conn);
}
}
}

//mysql insert query 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli Select</title>

        <link rel="styleSheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
   <h1>MySQL Insert</h1>
<?php

// if(mysqli_query($conn, $query ) ) {
//  echo"New record has been entered into the database!!";
// } else {
//     echo"Error: ".$query . "<br>". mysqli_error($conn);
// }

?>

  <p class="text-danger">* Required Fields</p>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] );?>" method="post">
  <small class="text-danger">* <?php echo $nameError; ?></small>
  <input type="text" placeholder="Username" name="username"><br><br>

  <small class="text-danger">* <?php echo $emailError; ?></small>
  <input type="email" placeholder="Email" name="email"><br><br>

  <small class="text-danger">* <?php echo $passwordError; ?></small>
  <input type="password" placeholder="Password" name="password"><br><br>

<input type="submit" name="add" value="Add Entry">
  </form>
 

</div>
 
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>