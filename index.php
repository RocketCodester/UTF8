<?php

declare(strict_types=1);
namespace UTF;

//phpinfo();
//exit;

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

$string = 'Rychlá hněda liška zakopl pŕes plot.';

header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html>
<head>
    <title>UTF-8 Test</title>
</head>
<body>
    <p>Upper: <?= mb_strtoupper($string) ?></p>
    <p>Count: <?= mb_strlen($string) ?></p>
</body>
</html>
