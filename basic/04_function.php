<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php function</title>
</head>
<body>
    <h1>function</h1>
    <?php
    function sum($a, $b){
        $result = $a + $b;
        return $result;
    }
    //$result = sum(29292, 20123470);
    //echo $result;
    echo sum(29292, 20123470);
    $total = sum(29292, 20123470);
   // echo $result; //에러
   echo $total;

   $langs = [
    'html',
    'css',
    'javascript'
   ];
    ?>
    <h2>지역변수 전역변수</h2>
    <h2>변수 출력 함수</h2>
    <?php
       $langs = [
        'html',
        'css',
        'javascript'
       ];
       print_r($langs);
        ?>
<?php
function output($val){
    echo '<pre>';
    print_r($val);
    echo '</pre>';
    }
output($langs);

?>
</body>
</html>