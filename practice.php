<?php
//↓課題１
function sum($two){
    $result = $two * 2;
    return $result;
}
$a = 50;
echo sum($a) . "\n";
// ↓課題2
function add($a,$b){
    $result = $a + $b;
    return $result;
}
echo add(17,8);
echo "\n";
// ↓課題3
function mul_array($arr){
    $result = 1;
    foreach($arr as $num){
        $result = $result * $num;
    }
    return $result;
}
$array = [1,3,5,7,9];
echo mul_array($array);
echo "\n";
// ↓課題4
function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
            // echo $arr[0] . ", ";
        }
    }
    return $max_number;
}
$array = [3,5,2,50,34,23,16,61,34,55,6,9];
echo max_array($array);
echo "\n";
// ↓課題５
$schedule = "<p>今日の夕食の時間は6時です</p>";
// echo $schedul
strip_tags($schedule);
echo $schedule;
echo "\n";

$fluits = ["apple","banana","grape","melon"];
// print_r($fluits);
array_push($fluits,"pineapple","lemon");
print_r($fluits);
echo "\n";

$array1 = [1,2,3];
$array2 = [10,20,30];
$array3 = [100,200,300];
$array_add = array_merge($array1, $array2, $array3);
print_r($array_add);
echo "\n";

echo "現在のユニックスタイムスタンプ:" . time();
echo "\n";
$timestamp_2dayLater = mktime(0,0,0,2,5,2023);
echo "二日後のユニックススタンプ:" . $timestamp_2dayLater;
echo "\n";

echo date("Y/m/d");