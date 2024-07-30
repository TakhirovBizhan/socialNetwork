<?php

namespace Controllers;

use Services\Db;

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            // Логика для проверки пользователя
        }
        require __DIR__ . '/php_study/my_own_study/socialNetwork/templates/login.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $db = Db::getInstance();
            $db->query("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)", [
                'username' => $username,
                'password' => $password,
                'email' => $email,
            ]);
        }
        require __DIR__ . '/php_study/my_own_study/socialNetwork/templates/register.php';
    }
}