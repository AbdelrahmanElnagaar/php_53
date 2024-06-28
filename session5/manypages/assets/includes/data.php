<?php 

$products=[
    ['name'=>'product 1','price'=>'10','clr'=>'red'],
    ['name'=>'product 9','price'=>'40','clr'=>'blue'],
    ['name'=>'product 8','price'=>'90','clr'=>'yellow'],
    ['name'=>'product 0','price'=>'20','clr'=>'brown'],
    ['name'=>'product 4','price'=>'60','clr'=>'white'],
    ['name'=>'product 2','price'=>'30','clr'=>'red'],
];

foreach ($products as $key => $value ) {
    foreach ($value as $k => $v) {
    echo "<h1>the $k is $v";
};
};




?>