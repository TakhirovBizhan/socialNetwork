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

    public function GetCreatedAt() {
        return $this->created_At; 
    }

    public function GetUpdatedAt() {
        return $this->UpdatedAt;
    }

    public function GetContent() {
        return $this->content;
    }

    public function SetContent($content) {
        $this->content = $content;
    }


    protected static function getTableName()  {
        return 'comments';
    }
    
}

?>