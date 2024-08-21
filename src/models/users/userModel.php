<?php

namespace src\models\users;

use AbstactModel;


class User extends AbstactModel {
    protected $id;
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

    public function getBio() {
        return $this->bio;
    }

    public function setBio($bio) {
        $this->bio = $bio;
    }

    public function getProfile() {
        return $this->Profile;
    }

    public function setProfile($profile) {
        $this->profile = $profile;
    }

    public function getCreated_at()  {
        return $this->created_at;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function setPassword() {
        $this->Password = $password;
    }

    protected static function getTableName()  {
        return 'users';
    }

}


?>