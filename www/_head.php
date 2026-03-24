<!DOCTYPE html>
<html lang="zh-MY"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo isset($_title) ? "$_title - MySite" : "My Personal Site"; ?></title>

    <meta name="description" content="<?php echo $_description ?? '银橘の站'; ?>">
    <meta name="银橘" content="银橘の站">

    <link rel="icon" href="/www/resources/logo-favicon.png" type="image/png" alt="MySite Logo">

    <link rel="stylesheet" href="/www/css/main.css?v=<?php echo time(); ?>">

    <?php if (isset($_styles)): ?>
        <?php foreach ($_styles as $style): ?>
            <link rel="stylesheet" href="/www/css/<?php echo $style; ?>.css">
        <?php endforeach; ?>
    <?php endif; ?>

    </head>
<body>
    <header>
        <nav>
            <a href="/">首页</a>
            <a href="/projects.php">项目</a>
        </nav>
    </header>
    <main class="container"> 
