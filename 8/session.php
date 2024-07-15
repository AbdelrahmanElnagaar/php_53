<?php 
//regular expression.com (search)

var_dump($_GET);
var_dump($_POST);
$user=$_GET['us'];
$pass=$_GET['pw'];
$email=$_GET['em'];
$err=[];
$flag=0;



if (isset($user)){

//validation of username
    if (empty($user)){
        $err[]= "error message you must enter sentence <br>";

    }else{
        
        $flag++;
    }

    if(strlen($user) <= 3){
        $err[]="error message you must enter more than 3 <br>";
    }else{
        $flag++;
    }

    if(! preg_match("/senior$/",$user)){
        $err[]="error message you must enter  last sentence senior <br>";
    }else {
        $flag++;

    }
   
//validation of password
    if (empty($pass)){
        $err[]="error message you must enter password <br>";

    }else{
        
        $flag++;
    }

    if(strlen($pass) <= 8){
        $err[]="error message you must enter password more than 8 <br>";
    }else{
        $flag++;
    }

    if(! preg_match( "/^\\d+$/",$pass)){
        $err[]="error message you must enter  all password numbers <br>";
    }else {
        $flag++;

    }

//email validation
if (empty($email)){
    $err[]="error message you must enter email <br>";

}else{
    
    $flag++;
}

if(strlen($email) <= 8){
    $err[]="error message you must enter password more than 3 <br>";
}else{
    $flag++;
}

if(! preg_match( "/^\\S+@\\S+\\.\\S+$/",$email)){
    $err[]="error message you must enter  email format corectlty <br>";
}else {
    $flag++;

}

};

// foreach ($err as  $value) {               //can't echo the array
//     echo "$value";
// };

    if($flag==9){
        echo "$user <br>";
        echo "$pass <br>";
        echo "$email <br>";
    
};

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
<form action="" method="get">
        <input type="text" placeholder="username" name="us" > <br>
        <input type="text" placeholder="password" name="pw">  <br>
        <input type="text" placeholder="email" name="em">     <br>
        <button>login</button>                                <br>
        </form>



            <?php foreach ($err as $value):  ?>
                <h1><?= $value ?></h1>
            <?php endforeach ?>    

</body>
</html>