<?php

require_once __DIR__ . '/../vendor/autoload.php';

use src\ActionHandler;

$db = new ActionHandler(__DIR__ . '/../db/database.db');
$db->removeOldRecords();

$getOld = $db->removeOldRecords();

if ($getOld){
    foreach ($getOld as $chat_id){
        $db->removeHistoryFile($chat_id);
        $db->removeResource($chat_id);
        $db->removeLanguage($chat_id);
    }
    echo 'Success';
}