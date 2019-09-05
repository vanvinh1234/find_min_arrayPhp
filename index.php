<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function findMind($arr){
    $min=$arr[0];
    for($i=0; $i<count($arr); $i++){
        if($min>$arr[$i]){
            $min=$arr[$i];
        }
    }return $min;
}
$arr =[2,5,6,15,7];
echo findMind($arr);
?>
</body>
</html>
