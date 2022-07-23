<?php
//This is the main Anime module
//Search the Anime
$discord->registerCommand(
    "search",
    function ($message, $params) {
        echo $params[0];
        //bash command to search for Anime
        $command =
            '/bin/bash -c "'.dirname(__FILE__) .'/../ani-cli -x ' . $params[0] . ' <<< $\'q\\n\'"';
        exec($command, $output);
    },
    [
        "description" => "Search for an Anime",
    ]
);
