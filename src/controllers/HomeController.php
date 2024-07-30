<?php

namespace Controllers;

class HomeController {
    public function index() {
        require __DIR__ . '/../../templates/home.php';
    }
}