<?php

namespace Models;

use Config\Database;

class Blog {
    private $connection;

    public function __construct() {
        $this->connection = Database::getConnection();
    }

    public function getAllPosts() {
        $query = 'SELECT * FROM blog';
        $result = mysqli_query($this->connection, $query);

        $posts = [];
        while ($record = mysqli_fetch_assoc($result)) {
            $posts[] = $record;
        }

        return $posts;
    }
}
?>
