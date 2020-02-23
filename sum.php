<?php

//課題1
function mp($int)
{
  return $int * 2;
}

//課題2
function sum($a,$b)
{
  return $a + $b;
}

//課題3
$arr = array(1,2,3,4,5);

function allmp($arr)
{
  $count = count($arr);
  $result = 1;

  for($i =0;$i <= ($count-1);$i++)
  {
    $result *= $arr[$i];
  }
  return $result;
}

//課題4
function max_array($arr)
{
  $max_number = $arr[0];

  foreach($arr as $a)
  {
      if($max_number < $a)
      {
        $max_number = $a;
      }
  }
  return $max_number;
}

//課題5①
$str ='<p></p>はparagraph';

echo strip_tags($str);

//課題5②
$list = [1,2,3,4,5];
$list2 = [6,7];
array_push($list,$list2);

//課題5③
$array = ['a','b','c'];
$array_ = ['d','e','f','g'];
$result = array_merge($array,$array_);

//課題5④⑤
$now = time();
echo '今日の日付'.date('Y-m-d',$now);

$yesterday = mktime(0,0,0,2,22,2020);
echo '昨日の日付'.date('y-m-d',$yesterday);

?>
