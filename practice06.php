<?php

#設問１
function nibai($num){
    
    $result = 0;
    $result = $num * 2;
    return $result;
    
}

#結果確認用
#echo nibai(5);


#設問２
function sum($a, $b){
    
    $result = 0;
    $result = $a + $b;
    return $result;
}

#結果確認用
#echo sum(3, 4);

#設問３
$arr = array(1,3,5,7,9,);
$result = array_product($arr);

#結果確認用
#echo $result;

#設問４
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if ($max_number < $a){
       $max_number = $a;
    }
 }

 return $max_number;
 }
 
#結果確認用
# echo max_array(array(1, 2, 3, 4));

#設問５
$str = "<h1>タグを取り除く</h1>";
echo strip_tags($str) . "\n";

$arr = array("orange", "banana");
foreach($arr as $b){
    echo $b . "\n";
}

array_push($arr, "apple");
foreach($arr as $b){
    echo $b . "\n";
}

$arr1 = array("red", "blue");
$arr2 = array("yellow", "green", "pink");
$result = array_merge($arr1, $arr2);
foreach($result as $c){
    echo $c . "\n";
}

$time = time();
echo $time . "\n";

$date = date("Y/m/d");
echo $date . "\n";