<?php
$arr = [36,-41,59,26,-53,58,97,-93,-23,84,22];
$icount = count($arr);
$start = 0;
$end = $icount;
$left = 0;
$largest_value = 0;

for($i=0;$i<$icount;$i++){
    $curr = $arr[$i];
    $left +=  $curr;
    if($curr<0){
        if($left<0){
            $start = $i+1;
            $left = 0;
        }
    }else {
        if($left>$largest_value){
            $end = $i;
            $largest_value = $left;
        }
    }
}
echo($start);
echo("\n");
echo($end);
