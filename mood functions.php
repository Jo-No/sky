
<?php
include "mood suggestion.php";

// Mood slider results
if(isset($_POST["ca"])){
    echo "You set Calm/Agitated to ".$_POST["ca"];
}

if(isset($_POST["hs"])){
    echo "You set Happy/Sad to ".$_POST["hs"];
}

if(isset($_POST["tw"])){
    echo "You set Tired/Wide Awake to ".$_POST["tw"];
}

if(isset($_POST["sf"])){
    echo "You set Scared/Fearless to ".$_POST["sf"];
}

// Film suggestion based on mood slider results






?>
