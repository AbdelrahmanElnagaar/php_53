<?php 
//php standard recommendation ; 

//--------------------------------------------------------------------------------------------------------------
//ternary operator  ?:

// $isUserLogin=false;
//     $status= $isUserLogin==true ?  '<button> logout </button' : '<button> login </button>';
//     echo $status;   //in html tags because has tags
// echo'<br>';

// $isUserLogin=true;
// $role = 'admin';
//     $status= $isUserLogin==true ?
//         ($role!='admin' ? '<button> logout </button>':'<button> dashbord </button>') 
//         : '<button> login </button>';
//         echo $status; 
// echo'<br>';

//----------------------------------------------------------------------------------------------------------------
//null coalescing                              ??
//falsy values  =  false  0  -0  0.0  -0.0  null  []  '0'  ''          ?:

// $path='0';      
// $url=$path ??'/';
//     echo $url;
    
// $path='0';      
// $url=$path ?:'/';
//     echo $url;

//----------------------------------------------------------------------------------------------------------------------
//increment & decrement

// $x=9;
// echo $x++;
// echo ++$x;   //and decrement has the same operation
// echo $x;

// $v=null;
// echo $v++;
// echo ++$v;   // decrement don't affect on null type  
// echo $v;

// $r='ebrahim';
// echo ++$r; //last character -> next character
// echo --$r; //has now effect by my turn 

//----------------------------------------------------------------------------------------------------------------------
//logical operator (and & &&[logic]):all true  (or | ||):one true   (xor):one true but not both

// $x=true;
// $y=false;
// $z=false;
// $u=true;   
// var_dump($x && !$y || $z && false && true || !$u && $x) ;    //&& before || (from left)

//binary operation (bitwise)

#-----------------------------------------------------------------------------------------------------------------------
//array operator

// $x=['x','d','w'];
// $y=['k','q','p','m','b'];
// var_dump($x+$y);

// $x=['tt'=>'x','tp'=>'d','ok'=>'w'];
// $y=['qw'=>'k','io'=>'q','zw'=>'p','ew'=>'m','dg'=>'b'];
// var_dump($x+$y);

// $x=['0'=>4,'y'=>'7'];
// $y=[0=>'4','y'=>7];     
// var_dump($x==$y); //key $ value         //!=    <>'sql' 
// var_dump($x===$y); //key $ value & type  [array, and inside array(key & value)]
  
//-----------------------------------------------------------------------------------------------------
//if condition   (control flow)
 
// $ahmed=1;
// if($ahmed==1 ||$ahmed==2 ){
//     echo'the condition is true';
// }elseif($ahmed== 3){
//     echo 'the condition is false';
// }elseif($ahmed==9 && $ahmed>90){
//     echo 'the condition is false';
// }else {
//     echo 'the all condition is false';
// }

//-----------------------------------------------------------------------------------------------------
//while loop

// $d=9;
// while($d>= 0){
//     echo"the number is $d";
//     echo'<br>';
//     echo'the number is' .$d.'and thank you' ;
//     echo'<br>';
//     $d--;
// }

// $x=1;
// while ($x<= 7) {    //$x=true [=] $x
//     echo'hello';
//     $x++;
//     break;          //(break 2) for 2 levels      //continue    //{{{{{{{{be careful about infinty loop}}}}}}}}
// }

//----------------------------------------------------------------------------------------------------------------
//do while loop 

// $x=6;
// do {
//     echo"hello $x";
//     $x++;
// } while ($x <= 10);


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
<!--    
    <?= $status ?> 
    <br>
    <?= $isUserLogin==true ?'<button> logOUT </button':'<button> logIN </button' ?>
    <hr>
    <hr>
    <hr>    -->

<!----------------------------------------------------------------------------------->

<!-- <?php if($ahmed==1 ||$ahmed==2 ): ?>
    <h1>the condition <?=$ahmed?> is true </h1>
<?php elseif($ahmed==9 && $ahmed>90): ?>
    <h1>the condition <?=$ahmed?> is false </h1>
<?php else: ?>
    <h1>the all condition  is false </h1>
<?php endif ?> -->

<!-- ---------------------------------------------------------------- -->

<!-- <?php while($d>= 0): ?>
    <h1>the number is <?=$d?></h1>
    <?php $d-- ?>
    <?php endwhile ?> -->

<!----------------------------------------------------------------------------------------------------------- -->




</body>
</html>