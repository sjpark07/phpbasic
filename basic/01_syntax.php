<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basic</title>
</head>
<body>
    <h1>This is the title</h1>
    <?php
    /*// #echo 'hello world';*/
    ?>
    <h2>변수 $으로 시작 & 한글가능 & . ''으로 / "" 문자연결가능 </h2>
    <?php
    echo 'hello world<br>';

    $name= '홍길동';
    echo $name . '님 반갑습니다';
    echo $name1;
    
    ?>
    <hr>
    <?php
    $name= '홍길동';
    // echo "$name 님 반갑습니다"; 홍길동 님 반갑습니다.
    echo '$name 반갑습니다';
    // echo `$name 반갑습니다` backtic불가
    ?>

</body>
</html>