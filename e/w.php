<!DOCTYPE html>
<html>
<body>

<?php
$x = 7;
$y = 7;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();  // инициализация функции
echo $y; // выведет новое значение для переменной $y
?>

</body>
</html>
