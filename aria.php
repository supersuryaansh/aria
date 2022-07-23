<?php
###
# Include Discord PHP library and necessary classes
##
include __DIR__ . "/vendor/autoload.php";
include "bot_token.php";
use Discord\Discord;
use Discord\WebSockets\Intents;
use Discord\WebSockets\Event;
use Discord\Parts\User\Activity;
use Discord\DiscordCommandClient;

// Call the discord call and set a token
$discord = new DiscordCommandClient([
    "token" => $token,
    "prefixes" => ["^a ", "@1000291542591881267 "],
]);

$discord->on("ready", function (Discord $discord) {
    //include all modules
    foreach (glob("modules/*.php") as $filename) {
        include $filename;
    }
});
$discord->run();
