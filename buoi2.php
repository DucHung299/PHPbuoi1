<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Câu 4
    $a = 'Hung dep trai qua';
    echo strpos($a,"dep");
    echo "<br>";
    //Câu 7
    echo strtoupper($a);
    echo "<br>";
    //Câu 9
    echo ucwords($a);
    echo "<br>";
    //Câu 14
    $c = ['a','b','c'];
    echo implode($c);
    echo "<br>";
    //Câu 17
    $d = 'Hung hoc ngu';
    echo strstr($d,"ngu");
    echo "<br>";
    //Câu 16
    echo strchr($d,"hoc");
    echo "<br>";
    //Câu 18
    $e = 'Bo may can tat';
    $f = '/may/';
    echo preg_replace($f,'tao',$e);
    ?>
</body>
</html>