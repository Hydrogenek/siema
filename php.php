<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    
<?php

$count_page = ("pagevisits.txt");
$visits = file($count_page);
$visits[0] ++;
 
$fp = fopen($count_page , "w");
fputs($fp , "$visits[0]");
fclose($fp);
echo '<div id="yes">' . "Visits: " . $visits[0] . '</div>';

function display_file($filename) {

        $myfile = fopen($filename, "r") or die("KUUUURWA NIE UDAŁO SIĘ!!!!");
        echo '<div id="text-files">' . fread($myfile,filesize($filename)) . '</div>';
        fclose($myfile);
        
    


}

display_file("siema.txt");

display_file("elo.txt");

display_file("jou.txt")

?>

</body>
</html>



