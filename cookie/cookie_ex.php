<?php
$cookieName = 'city';
$cookieValue = 'seoul';
setcookie($cookieName, $cookieValue, time()+60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>쿠키 연습</h1>
    <?php
    echo "{$cookieName}라는 쿠키의 값은 {$_COOKIE[$cookieName]}입니다.";
    
    setcookie($cookieName, $cookieValue, time()-60);
    ?>
</body>
</html>