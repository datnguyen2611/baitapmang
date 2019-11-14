

<?php
// 1.Viết PHP script để hợp (nhập) hai mảng thành một mảng.
echo '1.Viết PHP script để hợp (nhập) hai mảng thành một mảng.';
    
    $array1  = [15,20,20];
    $array2 = ['this is ', 'array'];
    $newArray = array_merge($array1,$array2);
    $result = array_unique($newArray);
    echo '<pre>';
    print_r($result);
   


    //sai output, dua ve mang cung cap [15,20,this is, array], moi phan tu phai la duy nhat

    
    //2.Tìm độ dài ngắn/dài nhất của phần tử dạng chuỗi trong mảng
    echo '<br>';
    echo '2.Tìm độ dài ngắn/dài nhất của phần tử dạng chuỗi trong mảng';
    echo '<br>';
    $timDoDai  = [ 1234567897765443343, 'smitch' , 'mary' , 'jugg' ,'this is max name','this is min name'];
    print_r($timDoDai);

    $mapL = array_map(function ($e) {
        return strlen($e);
    }, $timDoDai);

    $toComparison = array_map(function ($e) {
        return (string) $e;
    }, $timDoDai);

    print_R($toComparison);

    echo 'do dai nho nhat la :' . min($timDoDai);
    echo ' <br>';
    echo 'do dai lon nhat la :' . max($timDoDai);
    echo '<br>';

    //3. >Sắp xếp mảng liên hợp theo giá trị trong PHP
    echo '3.>Sắp xếp mảng theo giá trị trong PHP';
    echo '<br>';
    $subject = [1,43,55,24];

    // sort($subject);

    usort($subject, function($a, $b) {
        return $a > $b;
    });

    foreach ($subject as $key => $val) {
        echo "" . $key . " = " . $val . "<br />";
    }
    //4. Kiểm tra xem các giá trị trong mảng có phải là chuỗi không
    echo '4.Kiểm tra xem các giá trị trong mảng có phải là chuỗi không';
    echo '<br>';
    $find = [ 'this name ',' this is ',222];

    // array_filter();    

    foreach($find as $key => $val){
        if(is_string($val)){
            echo '<pre>';
            print_r($val);
        }
        else{
            echo '<br>';
            echo ' this is not string';
        }
       
    }
   





    




?>