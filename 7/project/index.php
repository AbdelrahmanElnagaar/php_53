<?php 
$user=$_GET['userName'];
echo "welcome $user";


var_dump($user);

//echo can't print array



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>The user name is <?=  $user ?></h1>
    <h1><?=  'Enjoy with our srevice' ?></h1>
</body>
</html>