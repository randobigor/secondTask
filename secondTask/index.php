<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Task</title>
</head>
<body>
    <?
        include "blocks/menu.php";
        $pageName = isset($_GET['page']) ? $_GET['page'] : '';
        $filePath = "pages/{$pageName}.php";
        include $filePath;
    ?>
</body>
</html>