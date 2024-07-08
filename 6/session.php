<?php
//declare(strict_types=1);              //in the same file only

//------------------------------------------------------------------------------------------------------------------
//functions

// function ___function($f,$l){                //(parameter)  //can't to name the same fn but variable can it overwrite
//     echo "my name is $f $l";
// };
// ___function('ali', 'ahmed');                //invoke  //(argument)

//------------------------------------------------------------------------------------------------------

// function sum($f,$l){        //not reusable function      //return void            
//     echo  $f +$l;
// };
// $r=sum(9, 8);                
// echo $r+9;

// echo "<br>";

// function sumo($f,$l){               //return a value                 
//     return  $f +$l;
// };
// echo sumo(9, 8)+4;                

//------------------------------------------------------------------------------------------------

// ___function('ali', 'ahmed');      //hoisting :catch varibles and fn the run intepreted 
// function ___function($f,$l){                
//     echo "my name is $f $l";
// };

//--------------------------------------------------------------------------------------------------
//special cases

// if (false) {                //control flow aganist hoisting | and if condition true it is error to invoke before if
//     function world() {
//     };
// };
// world();

// function x() {
//     echo'x';
//     function y(){
//         echo 'y';
//     };
// };
// x();                                       //must invoke first fn to declare the inside of fn
// y();

//-----------------------------------------------------------------------------------------------------
//continue

// function function0(): int {              //type if return  
//     return 9;                            //if "9" turn into int without district mode
// };
// var_dump(function0()) ;   
// //--------------------------------------------------------------------------------------
// function function9(): void {                //not return but echo and some definitions
//     echo 9;                            
// }
// var_dump(function9()) ;   
// //--------------------------------------------------------------------------------------
// function function8(): ?int {          //null or int      
//     return null;                           
// };
// //--------------------------------------------------------------------------------------
// function function4(int $c,float|int $n): int|null|array {             //more than return type    //two ways
//     return null;                           
// };

//--------------------------------------------------------------------------------------

// function function5(int $c=5,float|int $n) {             //optional parameter vs required parameter
//     return "$c $n" ;  } ;                               //be careful about arrangment                        
// echo function5(9,8,2);

//------------------------------------------------------------------------------------------------------------
//passing argument by value & refrence

// function x( &$x, $y ) {
//     if($x % 2 != 0){
//         $x /= 2;
//     }
//     return $x+$y;
// }
// $x=7; $y= 8;
// echo x($x,$y);
// var_dump($x, $y);

//-----------------------------------------------------------------------------------------
//spread operator

// function sum($x,$y, ...$nums){      //array
//     $total = $x+$y;
//     foreach ($nums as $num) {
//         $total += $num;
//     }
//     return $total;
// }
// echo sum(5,7,3,1,3,5,6,7,3);

// function _array($x,$v,$h){
//     echo $x+$v+$h;
// };
// $world=['x'=>8,'v'=>3,'h'=>9];
// echo _array(...$world);


//-----------------------------------------------------------------------------------------
//named argument

// function sum($r,$n)
// {
//     echo $r+$n ;
// }
// sum(n:8,r:5);

// setcookie(name:'ali',secure:true);

//-------------------------------------------------------------------------------------------
//scope of variables

// $x=4;
// function vae(){
//     global $x;       //global by refrence  
//     echo  $x;       //local scope before declare global scope
// }
// $x=56;
// vae();
// $x=23;
// var_dump($x);

//-----------------------------------------------------------------------------------------------
//super global variables

// var_dump($GLOBALS['_COOKIE'])

//-----------------------------------------------------------------------------------------------
//static scope

// function test(){
//     static $x=1;                       //static block reinvoke method   //keep the changing
//     return $x++;                       //return once only
//     return 'ahmed'; //error
// };
// echo test();
// echo test();

//----------------------------------------------------------------------------------------------
//variable function

// function_sum = (int ...$sum){
//     echo array_sum($sum);
// };
// $r=function_sum;
// $r=(4,2,6,8,90,0);



//----------------------------------------------------------------------------------------------
//anonymous function                         // as expretion  , add to varaible ,must end with semi colom 

// $num=4;                                            //use don't change the native value , & by refrence
// $fn= function ( int x=3 ,float c=6) use ($num):flaot{
//     $num+=60;
//     return $num*x+c;

// }
// echo $fn;
// var_dump($num);

//--------------------------------------------------------------------------------------------------
//arrow fn                           //fn(arg)=>expression
// $x=3;
// $arr=[6,2,8];
//     $afterMap=array_map( fn($elm)=>$elm * $x ,$arr );          //callback function (fn | arrow fn)
//  var_dump($arr);                                             //global scope auto
//  var_dump($afterMap);                                                           
//  var_dump($arr);                                                           
//                                                             //one line only     //return the exeprission    //if statment =ane exeprission
// //--------------------------------------------------------------------------------------------------------------
// //call back fn

// $x=3;
// $arr=[6,2,8];
//     $after_Map=array_map( function($elm){
        
//         return  $elm * 100 ;


//     } );          
//  var_dump($arr);                                             
//  var_dump($after_Map);                                                           
//  var_dump($arr);



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
    
</body>
</html>