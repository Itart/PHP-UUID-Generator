<?php

// Do this so it can find the classes needed
spl_autoload_register(function($class) {
    $classFile = str_replace('\\', '/', $class);
    require_once __DIR__ . '/library/' . $classFile . '.php';
});

$start = microtime(true);
$total = 1000;

$generator = new Uuid\Generator();
$extAdapter = new Uuid\Adapter\PhpExtensionAdapter();

$i = 0;
while ($i++ != $total) {
    $generator->generate($extAdapter);
}
echo sprintf('%s uuids generate in %s ms.' . PHP_EOL, $total, round((microtime(true) - $start) * 1000, 7));
