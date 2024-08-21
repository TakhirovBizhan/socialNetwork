<?php

namespace src\models\friends;
use AbstactModel;

class Friend extends AbstactModel {
    protected $id;
    protected $user_id;
    protected $friend_id;
    protected $status;
    protected $created_At;

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getCreated() {
      return $this->created_At;  
    }

    protected static function getTableName()  {
        return 'friends';
    }
}

?>