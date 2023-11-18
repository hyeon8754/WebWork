<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>내림차순 배열</title>
</head>
<body>
<?php
function revsort(&$array) {
    sort($array);  // 배열을 오름차순으로 정렬
    $array = array_reverse($array);  // 배열을 뒤집어서 내림차순으로 만듦
}

// 예제 배열
$exampleArray = array(5, 2, 8, 11, 35);

echo "정렬 전 : ";
echo implode(", ", $exampleArray);

// revsort 함수를 사용하여 내림차순으로 정렬
revsort($exampleArray);

echo "<br>정렬 후 : ";
// 결과 출력
echo implode(", ", $exampleArray);
?>
</body>
</html>
