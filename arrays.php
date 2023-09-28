<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- <h1><?php echo TITLE; ?></h1> -->


        <?php 
        $username = "jostme";
        $fullname = "okoro john";
        $age      = "30";
        $gender   = "male";
        $country  = "Nigeria";
        
        echo $username;  

        //simple array
        $user = array(
            "jostme",
            "okoro john",
            32,
            "male",
            "Nigeria"
        );

        //echo the values of the array
        echo $user[0] . "<br>";
         echo $user[1] . "<br>";
         echo $user[2] . "<br>";
          echo $user[3] . "<br>";
           echo $user[4] . "<br>";

           //Associative arrays
           $people = array(
            "username" => " jostme ",
            "fullname" => "okoro john",
            "age"      => " 32",
            "gender"   =>  "male",
            "country"  => "nigeria"
           );

           
        
        ?>

    </div>
</body>
</html>