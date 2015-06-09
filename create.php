<?php

$stub_data = '<?php __HALT_COMPILER(); ?>';

$p = new Phar('ru.phar', 0, 'ru.phar');
$p->startBuffering();
$p->setStub($stub_data);
$p->buildFromDirectory(dirname(__FILE__) . '/ru');
$p->stopBuffering();

echo "ru.phar archive has been created\n";

?>