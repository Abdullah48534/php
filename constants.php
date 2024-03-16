<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        * {
            text-align: center;
            font-family: JetBrains Mono;
        }

        h1 {
            font-family: JetBrains Mono;
            color: rgb(89, 177, 148);
            text-align: center;
            margin-top: 10px;

        }
    </style>
    <?php
    print '<h1>Hellow php string function</h1>';

    $str = "This is Constants Tutorial in Php";
    echo $str;

    echo "<br/>";
    echo "<br/>";

    define("num1","This is way to cheak the constants using define function");
    echo num1;
        ?>
</body>
</html>