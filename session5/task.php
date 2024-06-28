<?php
//for loop

// for ($i = 0,print('hello'); $i < 9; $i++) {                //print as a parameter;
//     echo "<h1>my number is $i</h1>" ;
// };

// $txt = 'ali ali';
//     for ($i = 0,print('string'); $i <strlen($txt); $i++) {                
//         echo "<h1>my number is $txt[$i]</h1>" ;
//     };
    
    
// $arr = ['a', 'l', 'i', 'g','q','p'];
//     for ($i = 0,print'this is array',$length=count($arr); $i <$length; $i++) {                
//         echo "<h1>my number is $arr[$i]</h1>" ;
//     };

//--------------------------------------------------------------------------------------------------------------
//foreach

// $progLangs=[1=>'java',2=>'kotlin',3=>'c#',4=>'js',5=>'python'];
//     foreach ($progLangs as $key=> $item) {
//         echo"<h1>the prog number $key is $item</h1>";
//     };

// $user = [
//     'name'   => 'ahmed sayed' ,
//      'email'  => 'ahmed@gmail.com',
//      'skills' => ['js' , 'css' , 'html']
//     ];
//         foreach ($user as $key => $value) {
//             if (is_array($value)) {                                          //$key=='skills'
//                 foreach ($value as $language) {
//                     echo "<h1>$language </h1>";         //what is the diffrence between print and echo
//                 }
//             } else {
//                 echo "<h1>$value </h1>";
//             }
//             echo'this is \'foreach\' loop';    
//         };

//--------------------------------------------------------------------------------------------------------------------
//switch

// $today='sunday';
//     switch ($today) {
//         case 'friday':
//         case 'saturtay':
//         case 'monday':
//             echo'vacation';
//             break;
//         case 'tuseday';
//         case 'sunday';
//             echo 'work day';
//             break;
//         default:
//             echo 'enter a valid day';
//             break;
//     }

//---------------------------------------------------------------------------------------------------------------------
//match

// $todayNum='3';                          //match use ===                          //switch use ==
//     $result =match($todayNum){
//         0,1,2,3=>'vacation',
//         4,5,6,7=>'working day',
//         default => 'check the format'
//     };
// echo $todayNum;

//---------------------------------------------------------------------------------------------------------------
//include  //require

// ../

//include           #erorr with contact 
                    #html,js,css files  

//require_once     #erorr without contact after the method because the contact depend on require  
                   #php files                                                     









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


</html>-