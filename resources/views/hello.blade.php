<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task) : ?>

          <li><?php $task; ?></li>

        <?php endforeach; ?>
    </ul>
</body>
</html>
