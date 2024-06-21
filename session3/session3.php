<?php 
//php.net  , binary2hex , floating point gui , php operators precedence ,


// $x = true;
// echo $x;
// $arr=['php' , ' python','java','js' ];
// echo  $arr[0];
// // echo $allRogrmLang; //error
// $arr[2]='css';
// $arr[]='cotlin';
// array_push($arr,'c#');
// var_dump($arr);

// $degreesOfSTD = ['ahmed' => 50, 'mohamed' => 256,'sayed' => 4,'gamal' => 7];
// $degreesOfSTD[10]=55;
// $degreesOfSTD[]=5500;
// var_dump( $degreesOfSTD );
// echo $degreesOfSTD['sayed'];

// $classes = [
//     ['a' , 'b' , 'c'] ,
//     ['d' , 'e' , 'f'] ,
//     ['g' , 'h' , 'i'] ,
//   ];
//   echo $classes[1][2];
// var_dump($classes[2]);
// echo $classes[1][1];


// $products = [
//     'clothes' => [
//       ['name' => 'x' ,'price' => 55 , 'date' => 'date 1'],
//       ['name' => 'y' ,'price' => 100 , 'date' => 'date 1'],
//     ],
//     'food' => [
//       [ 'x' , 55 ,  'date 1'],
//       [ 'y' , 100 ,  'date 1'],
//     ]
//     ];
//   echo $products ['clothes'][0]['name'];
//   echo $products ['food'][0][1];

// $arr = [true => 'sayed' , null => 'ahmed' , 1 => '1' , '1' => 'string 1' , 1.5 => 'float number'];
// //true= 1 '1' 

//------------------------------------------------------------------------------------------------------
//now it's time to practical

//juggling or casting int 

// $x = (int) false;
// $o = (int) null;
// $y = (int) 9.46;
// $u = (string) 9.46;
// echo $x , $y , $u;

// var_dump(is_int($o));

//--------------------------------------------------------------------
//float double  *php.net float  never trust float number

// echo floor((.1+.7)*10);
// echo ceil((.1+.7)*10);

//--------------------------------------------------------------------
//string  herodoc="" nowdoc=''

// $name = "ahmed
// svvasbabab
// $ali
// abfbwawbw
// wbwbwbwb";

// echo $name [-1];

// $hello= <<<hi
//  wbwnwrnwnwn'''''"""
// afeggberb $ali
// hi;

// $helo= <<<'hi'
//  wbwnwrnwnwn'''''"""
// afeggberb $ali
// hi;

//--------------------------------------------------------------------
//null predefined php constant NULL

// $data=(9124);
// var_dump($data);
// unset($data);
// var_dump($data);

// $g=(int) null;
// $l=(string) null;
// $p=(boolean) null;

// echo $g , $l ,$p ;
// var_dump($p);
// var_dump((array) null);

//--------------------------------------------------------------------
//array => variable multi values                        declare and assign in the same step=CONSTANT

// $progLang = ['php', 'java', 'cotlin','c++',null,54647,true]; 
// echo $progLang[2][-1]; // only array don't allow minus in access(index) 

// var_dump (isset($progLang[3]));
// var_dump (isset($g));

// var_dump($progLang);
// print_r($progLang);

// $progLang [1]= 'css';
// $progLang[]='html';
// array_push($progLang,8,4,3,99,'c#');
// array_pop($progLang);

// var_dump (count($progLang)); //length start 1      index start 0

// echo $progLang; //can't print array

//--------------------------------------------------------------------
//associative array

// $lang=['java','ruby','java'];
// $frameWork=['php'=>'laravel',25252=>464,'ruby'=>'rails','java'=>'spring' ];

// $frameWork['ruby']='summer';
// $frameWork['c++']='messi';
// $frameWork[]=646486;

// var_dump( $lang );
// var_dump( $frameWork );
// echo $frameWork['java'];

//--------------------------------------------------------------------
//multi dimentional array

// $classes = [
//         ['a' , 'b' , 'c'] ,
//         ['d' , 'e' , 'f'] ,
//         ['g' , 'h' , 'i'] ,
//       ];
// echo $classes[0][2];
// var_dump(   $classes[1] );

// $products = [
//         'clothes' => [
//           ['name' => 'x' ,'price' => 55 , 'date' => 'date 1'],
//           ['name' => 'y' ,'price' => 100 , 'date' => 'date 1'],
//         ],
//         'food' => [
//           [ 'x' , 55 ,  'date 1'],
//           [ 'y' , 100 ,  'date 1'],
//         ]
//         ];
// echo $products['food'][1][2];
// echo $products['clothes'][0]['price'];
//--------------------------------------------------------------------

// $array = [true => 'sayed' , null => 'ahmed' , 1 => '1' , '1' => 'string 1' , 1.5 => 'float number'];

// echo $array[''];
// echo $array[null];
// echo $array[true]; //true = 1 or '1'   select last index,he overwrite others
//                   //false = 0 or '0'   select last index,he overwrite others
// echo $array[3];
// echo $array['3'];  //in index(key) sring number the same as integer number

// $arr=[1,2,3,4,9=>5,6,7,'99'=>'string number',9,10,'num'=>11,12,55=>14,56,12];
// $arr2=[1,2,3,4,77=>5,6,7,'6'=>'string number',9,10,'num'=>11,12,5=>14,56,12];

// unset($arr); //clear array and return null
// unset( $arr2[78] );
// $l=array_pop($arr);
// $m=array_shift($arr2); //remove first element and reindex the array

// var_dump($arr, $arr2,$l,$m); //accept multi parameter

//--------------------------------------------------------------------

// $arr=['a'=>5,'b'=>7,'v'=>2,'r'=>1,'p'=>3];
// var_dump(key_exists('a', $arr));
// var_dump(isset($arr['a']));

//--------------------------------------------------------------------
//operators  + - * / % **         ,            precedence

// $x=5.24;
// $y=3.94;

// var_dump($x+$y);
// var_dump($x-$y);
// var_dump($x*$y);
// var_dump($x/$y);
// var_dump($x%$y);
// var_dump($x**$y);

// var_dump(5*9/3+9-1);

//#unray operator + -
// $x= -'10';
// var_dump($x);

//#assignment operator = += -= *= ..........  right to left
// $x=$y=90;
// $x=($y+8)+9;
 
// $x+=10;

//#string operator (concatinate)
// $x= 'ali' . ' ibrahim';
// $x.= ' and i appreciate trika';
// var_dump($x);

//#comparison == === != !== < > <= >= <=> 
// var_dump(100 == '100');  //value
// var_dump(100 === '100'); //value & type
// var_dump(100 <=> 98); // -1 0 1


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