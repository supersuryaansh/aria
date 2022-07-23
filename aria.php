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
// Call the discord call and set a token
$discord = new Discord([
    "token" => $token,
]);

//this starts the bot
$discord->on('ready', function (Discord $discord) {
    echo "Bot is ready!", PHP_EOL;

    // Listen for messages.
        $discord->on("message", function ($message, $discord) {
        $msg_data = explode(" ", $message->content);

        //check if the command for bot is used
        if (preg_match("/\\^a\b/i", $msg_data[0])) {
        echo "{$message->author->username}: {$message->content}", PHP_EOL;
        
        }        


    });
});

$discord->run();