<?php
use Discord\Parts\User\Activity;
$activity = new Activity($discord, [
    'name' => 'https://supersuryaansh.me/',
    'type' => Activity::TYPE_LISTENING
    
]);

$discord->updatePresence($activity);