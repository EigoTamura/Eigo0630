<?php
    echo 'HelloWorld !' . PHP_EOL;
?>
<?php
$str="文字列です。str";//$strは文字列型
$int_number=4;//$int_numberは整数型
$arr=array(1,2,3,4);//$arrは配列型
$null=null;//nullはNULL型
$true=true;//$trueはNULL型
?>
//悪い例：変数名だけでこのデータが何を指すのか判別できない
$x=1000

//良い例：変数名が扱っているデータを表現している
$charge=1000
<?php
$str = "文字列です。"; // $strはstring（文字列）型 
$int_number = 4; // $int_numberはinteger（整数）型
$arr = array(1,2,3,4); // $arrはarray（配列）型
$null = null; //$nullはNULL型
$true = true; //$trueはboolean(論理)型

    echo gettype($str) . PHP_EOL;
    echo gettype($int_number) . PHP_EOL;
    echo gettype($arr) . PHP_EOL;
    echo gettype($null) . PHP_EOL;
    echo gettype($true) . PHP_EOL;
?>
<?php
$val1=50;
$val2=100;

if($val1>$val2){
    //$val1が$val2よりも大きい場合に実行される
    echo$val1."よりも".$val2."のほうが大きいです。".PHP_EOL;   
}elseif($val1==$val2){
    //$val1と$val2が同じ値の場合のみ実行される
    echo"同じ値です。".PHP_EOL;
}else{
    //上記の条件に当てはまらない場合に実行される。今回は$val1>$val2の場合
    echo"どの条件にも当てはまりませんでした。".PHP_EOL;
}
?>
<?php
for($i=1;$i<=100;$i++){
    if($i%3==0){
        echo"Fizz";
    }elseif($i%5==0){
        echo "Buzz";  
    }elseif ($i%3==0&&$i%5==0) {
        echo"FizzBuzz";
    }else{
        echo$i;
    }
    echo$i.'回目'.PHP_EOL;
}
?>

