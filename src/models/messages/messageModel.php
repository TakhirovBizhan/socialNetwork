<?php

namespace src\models\messages;
use AbstactModel;

class Message extends AbstactModel {
    protected $id;
    protected $sender_id;
    protected $receiver_id;
    protected $content;
    protected $created_at;

    protected static function getTableName()  {
        return 'messages';
    }
}

?>