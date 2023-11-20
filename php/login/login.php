<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];  // Update this line to match the input field name in the form
    $password = $_POST["password"];

    if (!empty($name) && !empty($password)) {
        echo "로그인 성공<br>";
        echo "아이디 : " . $name;
    } else {
        echo "로그인 실패. 이름과 비밀번호를 입력하세요.";
    }
}
?>

</body>
</html>
