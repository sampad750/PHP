<?php
$mode = 'encode';
$key = 'abcdefghigklmnopqrstubwsyz1234567890';
if('key' == $mode){
    $key_roginal = str_split($key);
    shuffle($key_roginal);
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>HTML page by hasin</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- single value from -->
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Data Scrambler</h1>
            <p>
                <a href="/?task=encode">Encode</a> |
                <a href="/?task=decode">Encode</a> |
                <a href="/?task=key">Generate key</a>
            </p>
            <form method="post">
                <label for="key">Key</label>
                <input type="text" name="key" id="key"><br>
                <label for="data">Data</label>
                <textarea placeholder="Data....." id="data"></textarea><br>
                <label for="result">Result</label>
                <textarea placeholder="Result....." id="result"></textarea>

                <button type="submit">Do it for me</button>
            </form>
        </div>
    </div>


</div>
</body>
</html>