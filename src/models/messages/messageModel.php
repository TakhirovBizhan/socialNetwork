<?php

namespace src\models\messages;
use AbstactModel;

class Message extends AbstactModel {
    protected $id;
    protected $sender_id;
    protected $receiver_id;
    protected $content;
    protected $created_at;

    public function getContent() {
        return $this->content;
    }

    public function getCreated_at() {
        return $this->created_at;
    }

    protected static function getTableName()  {
        return 'messages';
    }
}

?>