<?php
//Chèn phần tử vào mảng trong PHP
// echo '1. Chèn phần tử vào mảng trong PHP '.'</br>';
 $firstArr = [1,2,3,4,5,6,7,8,9,10];
 echo '<pre>';
 print_r($firstArr);
 $insert = 'thu can chen';
    array_splice($firstArr,6,1,$insert);
    echo '<pre>';
    print_r($firstArr);

    //2.tìm giá trị trung bình của các phần tử trong mảng.

    echo '2. tìm giá trị trung bình của các phần tử trong mảng .' . '<br>';
    $intArr = '41,22,1,22,34,21,67,87,54,56,78,21,45,67,88,15,65';
     $x = explode( "," ,$intArr);
     echo '<pre>';        
    print_r($x);
    $cout = count($x);
    $default = 0;
    
    echo($cout) .'<br>';
    
    foreach ($x as $key => $val){
        $default = $default + $val;
    }
    echo $default . '<br>';
    $mediumVal = $default / $cout;
    echo 'gia tri trung binh :' . floor($mediumVal) .'<br>';
   


//3.xóa một phần tử trong mảng.
echo '3. xóa một phần tử trong mảng.' . '<br>';
 $random = [1,2,3,4,5,6,7,8,9];
 echo '<pre>';
 print_r($random);
 unset($random[4],$random[5]);
 echo '<pre>';
 print_r($random);


 //4. so sanh 2 mang va in ra 2 mang khac nhau
 function contision($a, $b){
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
 }
 $array1 =['a' => 'abc','B' =>'cdz','c' =>'nhdc'];
 $array2 = ['a' => 'ccd','b' =>'dsfc', 'c' =>'nhdc'];
$result = array_diff_uassoc($array1,$array2,'contision');


 echo '<pre>';
 print_r($result);

?>