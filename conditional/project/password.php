<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="styleSheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
<h1>Password Hashing</h1>

<?php 

$hashedPassword = '';


if(isset($_POST['login'])){
    if(password_verify( 'mypassword', $hashedPassword)) {
        echo "password is correct!";
    } else {
        echo " Incorrect password!!";
    }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
method="post">

<label>* Password</label>
<input type="password" placeholder ="password" name="password"><br><br>
<input type="submit" name="login" value="Log in" class="btn btn-primary">
</form>
</div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>