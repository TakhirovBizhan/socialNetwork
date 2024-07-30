<?php

namespace src\models\users;

use AbstactModel;


class User extends AbstactModel {
    protected $username;
    protected $email;
    protected $password;
    protected $created_at;
    protected $profile_picture;
    protected $bio;

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    protected static function getTableName()  {
        return 'users';
    }

}


?>