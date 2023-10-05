<?php 

include("connection.php");

$query = "SELECT * FROM users";
$result = mysqli_query( $conn, $query );

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
   <h1>MySQL select</h1>
</div>
  <?php 
  if( mysqli_num_rows($result) > 0) {

    //data output
echo "<table class='table table-bordered'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";


    while( $row = mysqli_fetch_assoc($result) ) {
   echo "<tr><td>" .$row["id"] ."</td><td>". $row ["username"] ."</td><td>".
    $row["email"] ."</td></tr>";

   echo "</table>";
    }
} else {
    echo "oooop! no result";
}
mysqli_close($conn);
  
  ?>

    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>