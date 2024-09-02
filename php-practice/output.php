<?php
require('input.php');
print_r($numbers);
?>
<?php
    //関数の定義
    function sum_number(){
        $result=0;
        for($i=1;$i<=10;$i++){ 
            $result=$result+$i;
        }
        echo$result.PHP_EOL;
    }
    //関数の呼び出し
    sum_number();
?>
<?php
    // 関数の定義
    function sum_number($min_num,$max_num) {
        $result = 0;
        for ($i = $min_num; $i <= $max_num; $i++) { 
            $result = $result + $i;
        }
        echo $result.PHP_EOL;
    }
    
    // 関数の呼び出し
    sum_number(1, 9);
?>