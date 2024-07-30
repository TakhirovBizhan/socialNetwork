<?php

namespace src\models\comments;

use AbstactModel;

class Comment extends AbstactModel {
    protected $id;
    protected $post_id;
    protected $user_id;
    protected $content;
    protected $created_At;
    protected $updated_at;

    protected static function getTableName()  {
        return 'comments';
    }
    
}

?>