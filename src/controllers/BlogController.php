<?php

namespace Controllers;

use Models\Blog;

class BlogController {
    private $blogModel;

    public function __construct() {
        $this->blogModel = new Blog();
    }

    public function showPosts() {
        $posts = $this->blogModel->getAllPosts();
        include 'src/views/blog_view.php';
    }
}
?>
