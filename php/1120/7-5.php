<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>고객 정보 출력</title>
</head>
<body>
<?php
$filename = 'client.txt';

$file = fopen($filename, 'r');

if ($file) {
    echo "<h2>나이가 30세 이상인 고객 정보 : </h2>";

    // 파일의 끝까지 읽기
    while (!feof($file)) {
        $line = fgets($file); // 한 줄씩 읽기

        // 탭 문자를 기준으로 데이터 분리
        $data = explode("\t", $line);

        // 배열에서 공백을 제거하여 고객 정보 추출
        $name = trim($data[0]);
        $age = trim($data[1]);
        $gender = trim($data[2]);
        $email = trim($data[3]);

        // 나이가 30세 이상인 고객 정보 출력
        if ($age >= 30) {
            echo "이름: {$name}, 나이: {$age}, 성별: {$gender}, 이메일: {$email}<br>";
        }
    }

    // 파일 닫기
    fclose($file);
} else {
    echo "파일을 열 수 없습니다.";
}
?>
</body>
</html>
