<?php

namespace src\models\posts;
use AbstactModel;

class Post extends AbstactModel{
    protected $id;
    protected $user_id;
    protected $content;
    protected $created_at;
    protected $updated_at;

    protected static function getTableName()  {
        return 'posts';
    }

    public function getCreated_at() {
        return $this->created_at;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getUpdated_at() {
        return $this->updated_at;
    }
}

?>