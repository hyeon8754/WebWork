<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exam.txt</title>
</head>
<body>
<?php
$filename = 'exam.txt';

$file = fopen($filename, 'r');

if ($file) {
    $lineCount = 0;
    $wordCount = 0;
    $charCount = 0;

    // 파일의 끝까지 읽기
    while (!feof($file)) {
        $line = fgets($file); // 한 줄씩 읽기

        // 줄 수 증가
        $lineCount++;

        // 단어 수 증가 (정규 표현식 사용)
        preg_match_all("/\b\w+\b/u", $line, $matches);
        $wordCount += count($matches[0]);

        // 글자 수 증가
        $charCount += mb_strlen($line, 'UTF-8');
    }

    // 파일 닫기
    fclose($file);

    // 결과 출력
    echo "파일 '{$filename}'의 통계:<br>";
    echo "줄 수: {$lineCount}<br>";
    echo "단어 수: {$wordCount}<br>";
    echo "글자 수: {$charCount}<br>";
} else {
    echo "파일을 열 수 없습니다.";
}
?>

</body>
</html>
