<?php
//$n = 234;
//$n="$n";
//$s=0;
//$p=1;
//
//for($i=0;$i<strlen($n);$i++){
//    $s+=$n[$i];
//    $p*=$n[$i];
//}
//echo $p." ".$s;
//
// $p-$n;

 ////////////////////////////////
///1342. Number of Steps to Reduce a Number to Zero
// echo "<br>";
//$num = 14;
//$s=0;
// for($i=1;$i<=$num;$i++){
//     if($num%$i==0){
//         $s++;
//     }
//
// }
// echo $s;

 //////////////////////////////
//echo "<br>";
//$items = [
//    ["phone","blue","pixel"],
//    ["computer","silver","phone"],
//    ["phone","gold","iphone"]
//];
//$a=['type','color','name'];
//$ruleKey = "type";
//$ruleValue = "phone";
//
//for($i=0;$i<count($items);$i++){
//    if($items[$i][array_search($ruleKey,$a)]==$ruleValue){
//        $s++;
//    }
//}
//
//return $s;

/////////////////////////////
///1528. Shuffle String
//echo "<br>";
//$s = "codeleet";
//$indices = [4,5,6,7,0,2,1,3];
//$m=$s;
//for($i=0;$i<count($indices);$i++){
//    $m[$indices[$i]]=$s[$i];
//}
//
//echo $m;

//echo "<br>";
//$s = "MCMXCIV";
//$p=0;
//$m=["M"=>1000,"D"=>500,"C"=>100,"X"=>10,"L"=>50,"V"=>5,"I"=>1];
//for ($i=0;$i<strlen($s);$i++){
//    if ( ($i+1)<strlen($s) && $m[$s[$i]]<$m[$s[$i+1]]){
//        $p-=$m[$s[$i]];
//    }else {
//        $p += $m[$s[$i]];
//    }
//}
//return $p;
//////////////////////
/// 2089. Find Target Indices After Sorting Array
echo "<br>";
//
//$nums = [1,2,5,2,3];
//$target = 3;
//$m=[];
//sort($nums);
//for ($i=0;$i<count($nums);$i++){
//    if($nums[$i]==$target){
//        $m[]=$i;
//    }
//}
//return $m;


/// 1588. Sum of All Odd Length Subarrays
//echo "<br>";
//$arr = [1,4,2,5,3];
//
//    $sum = 0;
//    $len = count($arr);
//    for($i = 0; $i < $len; $i++){
//        $sum += $arr[$i];
//        $count = 1;
//        for($j = $i+1; $j < $len; $j++){
//            $count++;
//            if($count % 2 == 1){
//                $sum += array_sum(array_slice($arr, $i, $count));
//            }
//        }
//    }
//    echo $sum;

//14. Longest Common Prefix
echo "<br>";
//$strs = ["flower","flow","flight"];
//$x=min($strs);
//
//$s="";
//    for($i=0;$i<strlen($x);$i++){
//        for($j=0;$j<count($strs);$j++){
//            if($x[$i]!=$strs[$j][$i]){
//                return $s;
//            }
//        }
//        $s.=$x[$i];
//    }
//    return $s;




//OOP
//////
echo "<br>";
//function isValid($s) {
//    $stack = [];
//    $map = [
//        '(' => ')',
//        '[' => ']',
//        '{' => '}'
//    ];
//    for ($i = 0; $i < strlen($s); $i++) {
//        if (isset($map[$s[$i]])) {
//            array_push($stack, $s[$i]);
//        } else {
//            $top = array_pop($stack);
//            if ($map[$top] != $s[$i]) {
//                return false;
//            }
//        }
//    }
//    return empty($stack);
//}


$s = "   fly me   to   the mfoon  ";
for ($i=0;$i<strlen($s)-1;$i++){
    if( $s[$i] && $s[$i+1]==" "){
        $s[$i]=$s[$i+1];
    }
}

echo $s;

?>