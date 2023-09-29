<?php 
define("TITLE", "Honest Click Bait Headlines");
if(isset ($_POST["fix_submit"])){
    //grab the value ofrom textarea in $_post 
    //make all letters lowercase using strtolower()function
    //store in a variable
    $clickBait = strtolower ($_POST["clickbait_headline"]);
//store array of clickbait-sounding words of phrases
$a = array(
    "scientists",
    "doctors",
    "hate",
    "stupid",
    "weird",
    "simple",
    "trick",
    "shocked me",
    "you'll never believe",
    "hack",
    "epic",
    "unbelieveable"
);


//store array of replacementwords
$b= array(
    "so-called scientists",
    "so-called doctors",
    "aren't threatened by",
    "average",
    "method",
    "is no different than the others",
    "you won't really be surprised by",
    "slightly improve",
    "boring",
    "normal"
);


//use the str_ replace( func)
$honestHeadline = str_replace($a, $b, $clickBait);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>

        <link rel="styleSheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1><?php echo TITLE; ?></h1>
        <p class="lead">Hate click baits? turn those annoying headlines into realistic and honest ones using this simple program.</p>

        <div class="row">
    <form class= "col-sm-8 col-sm-offset-2" action="" method="post">
<textarea placeholder="paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
<button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest!!</button>
</form>
</div>
  
    <?php 
    if(isset($_POST["fix_submit"])){
        echo $honestHeadline;
    }
    
    ?>


    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>