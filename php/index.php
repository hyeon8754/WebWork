<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 과제</title>
    <style>
        h3 {
            color: #fff;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #282c35;
            text-align: center;
            padding: 20px;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #545b6b;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
        }

        a:hover {
            background-color: #39414e;
        }

        .php-version {
            margin-top: 20px;
            color: #fff;
        }
    </style>
</head>
<body>

    <h3>PHP 과제</h3>
    <hr>
    <a href="6weeks/6weeks.php">6주차 과제</a>
    
    <?php
        echo '<div class="php-version">현재 PHP 버전: ' . phpversion() . '</div>';
    ?>
</body>
</html>
