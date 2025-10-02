
<!DOCTYPE html>
<html>
<body>

<?php
function test() {
    $foo = "локальная переменная";

    echo '$foo в глобальной области видимости: ' . $GLOBALS["foo"] . "\n";
    echo '$foo в текущей области видимости: ' . $foo . "\n";
}

$foo = "глобальная переменная";
test();
?>

</body>
</html>
