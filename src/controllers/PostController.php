<?php

namespace Controllers;

class PostController {
    public function create() {
        // Логика для создания поста
        require __DIR__ . '/../../templates/create_post.php';
    }
}