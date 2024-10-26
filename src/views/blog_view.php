<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
<h1>MySQL Content:</h1>
<?php foreach ($posts as $record): ?>
    <h2><?= htmlspecialchars($record['title']) ?></h2>
    <hr>
<?php endforeach; ?>
</body>
</html>
