<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>삼각형 출력</title>
    <style>
        body {
            white-space: pre;
        }
    </style>
</head>
<body>
<?php
$n = 5; // 원하는 출력 행 수

// 위쪽 삼각형 출력
for ($i = 0; $i <= $n; $i++) {
    for ($j = 65; $j < 65 + $i; $j++) {
        echo chr($j) . " ";
    }
    echo "<br>";
}

// 아래쪽 삼각형 출력
for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = 65; $j < 65 + $i; $j++) {
        echo chr($j) . " ";
    }
    echo "<br>";
}
?>
</body>
</html>
