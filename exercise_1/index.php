<?php
    /* 
        Bai1:
        Cho mảng 1 : 1, 3 , 5 , -5 , 6, 7, -33, -33, -4, -5, 6, 7
        Cho mảng 2 : 177, 388 , 544 , -53 , 6, 755, -33, -33, -45, -53, 65, 75        
        Sắp xếp tăng dần 2 mảng trên.
        Gộp 2 mảng trên lại thành 1 mảng dài giảm dần
        Xóa phần tử trong mảng, ( Câu này áp dụng cho mảng 1 hoặc 2 hoặc mảng giảm dần đều được )
    */

    $arrayOne = array(1, 3, 5, -5, 6, 7, -33, -33, -4, -5, 6, 7);
    $arrayTwo = array(177, 388, 544, -53, 6, 755, -33, -33, -45, -53, 65, 75);
    $arr = array();

    sort($arrayOne);
    sort($arrayTwo);


    $arr = array_merge($arrayOne, $arrayTwo);
    rsort($arr);

    function delete_array($value, $array) {
        if($value != NULL) {
            $i = 0;
            $length = count($array);
            echo "Length of array: " . $length . "<br/>";
            for(;$i < $length; $i++) {
                if($array[$i] == $value) {
                    //array_splice($array, $i, 1);
                    unset($array[$i]);
                }
            }
            echo "Length of array after delete: " . count($array) . "<br/>";
            print_r($array);
        } else {
            return NULL;
        }
    }

    delete_array(1, $arrayOne);
    echo "<br/>";
    print_r($arrayOne);
    
?>