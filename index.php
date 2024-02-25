<?php

require __DIR__ . '/vendor/autoload.php';

use src\ArbeitsTelegramBot;




$bot = new ArbeitsTelegramBot();
$bot->listen();
// Удаление вебхука
//$bot->deleteWebhook();
//
//// Ваш код бота здесь
//$bot->onCommand('start', function (Nutgram $bot) {
//    $bot->sendMessage('Ciao!');
//});
//
//$bot->onText('My name is {name}', function (Nutgram $bot, string $name) {
//    $bot->sendMessage("Hi $name");
//});


