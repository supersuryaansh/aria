//display the user avatar
<?php $discord->registerCommand(
    "zoom",
    function ($message) {
        $message->reply($message->author->avatar);
        echo "{$message->author->username}: {$message->content}", PHP_EOL;
    },
    [
        "description" => "See your full sized Avatar",
    ]
);
