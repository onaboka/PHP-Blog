<?php

require 'vendor/autoload.php';

use Controllers\BlogController;

$blogController = new BlogController();
$blogController->showPosts();
?>
