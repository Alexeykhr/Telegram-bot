<?php

namespace tlg\telegram\parse;

use tlg\telegram\parse\messages\PChat;
use tlg\telegram\parse\messages\PFrom;
use tlg\telegram\parse\messages\PEntities;

class PMessage
{
    public static $isMessage = false;

    public static $text;
    public static $date;
    public static $messageID;

    public static function set($data)
    {
        if ( empty($data->message) )
            return;

        $message = $data->message;
        self::$isMessage = true;

        self::$text = isset($message->text) ? $message->text : null;
        self::$date = isset($message->date) ? $message->date : null;
        self::$messageID = isset($message->message_id) ? $message->message_id : null;

        if ( isset($message->from) )
            PFrom::set($message->from);

        if ( isset($message->chat) )
            PChat::set($message->chat);

        if ( isset($message->entities) )
            PEntities::set($message->entities);
    }
}
