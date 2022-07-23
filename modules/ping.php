//reply with a fun gif when pinged
<?php $discord->registerCommand(
    "ping",
    function ($message) {
        return "https://tenor.com/view/cats-ping-pong-gif-8942945";
    },
    [
        "description" => "I like Ping Pong with the cats",
    ]
);
