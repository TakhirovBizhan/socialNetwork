<?php

namespace src\models\friends;
use AbstactModel;

class Friend extends AbstactModel {
    protected $id;
    protected $user_id;
    protected $friend_id;
    protected $status;
    protected $created_At;

    protected static function getTableName()  {
        return 'friends';
    }
}

?>