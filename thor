#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';
use Core\Helper\consoleHelper as Console;
try {
    (new Console)->magic();
} catch (Exception $e) {
    throw new \Core\ThorException($e->getMessage());
}