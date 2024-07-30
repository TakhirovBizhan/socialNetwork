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
}

?>