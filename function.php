<?php  
//functions.php
function checkForClickBaits(){
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

//return array of the variables so we can access it globally
return array($clickBait, $honestHeadline);
}

function displayHonestHeadline($x, $y ){
            echo "<strong class='text-danger'>Original Headline</strong>
        <h4>".ucwords($x)."</h4><hr>";


                echo "<strong class='text-success'>Honest Headline</strong>
        <h4>".ucwords($y)."</h4>";
}
?>