<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>연상 배열</title>
</head>
<body>
<?php
// 연상 배열 초기화
$cityByPerson = array(
    'Kim' => 'Seoul',
    'Lee' => array('Pusan', 'Daegu'),
    'Choi' => 'Inchon',
    'Park' => array('Suwon', 'Daejon'),
    'Jung' => array('Kwangju', 'Chunchon', 'Wonju')
);

// Choi 항목 삭제
unset($cityByPerson['Choi']);

// 결과 출력
echo "연상 배열의 내용 :<br>";
foreach ($cityByPerson as $person => $cities) {
    echo "{$person} : ";

    // 만약 도시가 배열이면 각 도시 출력, 아니면 도시 하나만 출력
    if (is_array($cities)) {
        echo implode(', ', $cities);
    } else {
        echo $cities;
    }

    echo "<br>";
}
?>

</body>
</html>