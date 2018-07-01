<?php

/**
 * Created by PhpStorm.
 * User: lwj
 * Date: 2018/6/28
 * Time: 9:53
 */

$array = range(1,50);
shuffle($array);

$arr = $array;

//基本算法：
//设计想法,从i后面取最小值，然后与i进行交换
$len = count($arr);

//
$time1 = microtime(true);
for($i=0; $i<$len; $i++){
    for($j=$i+1;$j < $len; $j++){
        if($arr[$i] > $arr[$j]){
            //进行数据交换
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
$time2 = microtime(true);
$useTime = ($time2-$time1)*1000;
echo '普通排序总用时：'.$useTime.'\t';


//下面的冒泡写法
$arr = $array;
//echo json_encode($arr);
$time1 = microtime(true);
$flag = true;
for($i=0;$i < $len; $i++)
{
    $flag = false;
    for($j = 0; $j< $len-$i-1; $j++)
    {
        if($arr[$j] > $arr[$j+1]){

            //进行交换
            $t = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $t;
            //echo json_encode($arr);
            $flag = true;

        }
    }

}


$time2 = microtime(true);
$useTime = ($time2-$time1)*1000;
echo '总用时：'.$useTime.'\t';
echo json_encode($arr);

