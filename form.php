<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Welcome ";
        echo "*";
        echo $_POST["firstname"];
        echo " ";
        echo $_POST["lastname"];
        echo "*";
    }
?>
