<?php

namespace src\models\likes;
use AbstactModel;

class Like extends AbstactModel {

protected $id;
protected $post_id;
protected $user_id;
protected $created_at;

public function getCreated() {
    return $this->created_at;
}

protected static function getTableName()  {
    return 'likes';
}

}
?>