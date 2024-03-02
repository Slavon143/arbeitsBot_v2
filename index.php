<?php
//// Установка максимального времени выполнения скрипта
//ini_set('max_execution_time', 200);
//
//// Установка максимального времени, в течение которого PHP должен принимать ввод
//ini_set('max_input_time', 300);
//
//// Установка лимита памяти для скриптов PHP
//ini_set('memory_limit', '128M');
//
//// Установка максимального размера POST-запроса
//ini_set('post_max_size', '32M');
//
//// Установка максимального размера загружаемого файла
//ini_set('upload_max_filesize', '32M');

require __DIR__ . '/vendor/autoload.php';

use src\ArbeitsTelegramBot;

$bot = new ArbeitsTelegramBot();

$bot->start();