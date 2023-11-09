<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6-1</title>
</head>
<body>
<?php
    $a = 7;

    printNextNumber($a);
    function printNextNumber($a) {
        echo "\$a의 값 : $a<br>\n";
        if ($a % 2 == 1) {
            // 홀수일 때
            $nextNumber = $a + 1;
            echo "출력 결과 : $nextNumber";
        } else {
            // 짝수일 때
            echo "출력 결과 : $a";
        }
    }
?>
</body>
</html>