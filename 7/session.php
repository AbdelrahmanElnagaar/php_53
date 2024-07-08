<?php
//header"location=sgsg.php"

//action = go to location || #

//methog= 
           // get=shown in url (? query parameter)| retrive a data 
          // post=not shown in url (more security) | add a data 


//button: name:submitbtn ,third key




//-----------------------------------------------------------------------------------------

// var_dump($GLOBALS);
// var_dump($_GET);
// var_dump($_POST);

// if (isset($_GET["un"])) {
//     var_dump($_GET["un"],$_GET['pw']);
//     echo $_GET['un'];
//     echo $_GET['pw'];
// }
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
    <form action="" method="post">
        <input type="text" placeholder="username" name="un">
        <input type="text" placeholder="password" name="pw">
        <button>login</button>
    </form>
</body>
</html>