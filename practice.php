<?php
$name = "Yuki";
if ($name = "Yuki"){
    echo "私は ".$name." です";
}
else{
    echo "私は".$name."ではありません";
}
echo "\n";
$total = 1;
for ($i = 1; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";
$fruits = ["banana", "apple", "strawberry", "grape", "melon"];
foreach ($fruits as $fluet){
    if($fluet == "melon"){
        echo $fluet . "";
        }
        else{
            echo $fluet . ", ";
        }
}
echo "\n";
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++){
    if ($i % 5 ==0){
        echo $i."\n";
        }
}
