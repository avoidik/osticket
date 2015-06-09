<?php

$phar = new Phar('ru.phar');
$phar->extractTo(dirname(__FILE__) . '/ru_out');

echo "ru.phar archive has been unpacked\n";

?>