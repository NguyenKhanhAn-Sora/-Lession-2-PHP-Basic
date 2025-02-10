<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sum(int $a, int $b, int $c) {
            return $a + $b + $c;
        }

        function average(int $a, int $b, int $c) {
            return floatval(($a + $b + $c)/3);
        }
        $sum = sum(1,2,3);
        echo $sum."<br>";
        $average = average(1,2,3);
        echo $average;
    ?>
</body>
</html>