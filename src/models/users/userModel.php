<?php

namespace src\models\users;

use AbstactModel;
use config\db;

class User extends AbstactModel {
    protected $id;
    protected $username;
    protected $email;
    protected $password;
    protected $created_at;
    protected $profile_picture;
    protected $bio;
}

?>