<?php

namespace Config;

class Database {
    public static function getConnection() {
        $connection = mysqli_connect(
            'php-blog-db-1',
            'lamp_demo',
            'password',
            'lamp_demo'
        );

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $connection;
    }
}
?>
