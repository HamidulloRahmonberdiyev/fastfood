<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<style>
    body {
        background-color: #29323c;
    }
    h1 {
        color: white;
        font-family: Verdana;
        font-size: 50px;
        text-align: center;
    }
     p {
        font-family: sans-serif;
        color: white;
        font-size: 15px;  
    }
    b {
        color: red;
        font-size: 20px;
        font-family: Tahoma;
    }
</style>
<body>
    <h1>Error happened!</h1>
    <p><b>Code error:</b>  <?= $errno; ?></p>
    <p><b>Text error:</b>  <?= $errstr; ?></p>
    <p><b>The file in which the error occurred:</b>  <?= $errfile; ?></p>
    <p><b>The line where the error occurred:</b>  <?= $errline; ?></p>
</body>
</html>