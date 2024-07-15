<?php
var_dump($_POST);
$userName=$_POST['us'];
$passWard=$_POST['pw'];
$flag=0;
$users = [
    ['username' => 'mohamed' , 'password' => 5050],
    ['username' => 'ahmed' , 'password' => 7895],
    ['username' => 'ahmedSayed' , 'password' => 1010],
    ['username' => 'marawan' , 'password' => 9632],
    ['username' => 'bb' , 'password' => 55],
];

    foreach ($users as $user) {
       if( $userName== $user['username'] && $passWard== $user['password']) {
        $flag=1;
        break;
    }};

        if (isset($_POST['us'])){
            if($flag==1){                                               //to compare == not =
                header('location:index.php?userName='.$userName);
                
            }else{
            echo "<h1>please check your info</h1>";
        }};















?>
