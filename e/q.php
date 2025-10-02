<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
    $A = 7; // локальная переменная
    echo "<p>Переменная A внутри функции: $A</p>";
}
myTest();

// использование A вне функции вызовет ошибку
echo "<p>Переменная A вне функции: $A</p>";
?>

</body>
</html>
