<?php
if (preg_match("/\\ping\b/i", $msg_data[1])) {
    $message
    ->Reply("https://tenor.com/view/cats-ping-pong-gif-8942945")
    ->done(function (Message $message) {});
}