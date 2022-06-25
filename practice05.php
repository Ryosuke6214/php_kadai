<?php
#設問１
$name = "Ryosuke";

if ($name == "Ryosuke"){
    echo "私は" . $name . "です";
    echo "\n";
}else{
    echo "あなたの名前ではありません";
    echo "\n";
}

#設問２
$total = 0;

for($i = 1; $i <= 10000 ; $i++){
    $total = $total + $i;
}

echo $total;
echo "\n";

#設問３
$fruits = ['apple','banana','melon','orane','grape'];

foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

#設問４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}