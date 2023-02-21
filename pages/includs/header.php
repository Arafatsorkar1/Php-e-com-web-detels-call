<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand"><img src="assets/img/burger.jpg" alt="" width="50px" height="50px"></a>
        <ul class="navbar-nav mx-auto">

            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li><a href="action.php?page=about" class="nav-link">About</a></li>

            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">

                    <?php foreach ($categories as $category) {?>


                        <li><a href="action.php?page=category&&id=<?php echo $category['id']?>" class="dropdown-item"> <?php echo $category['name']?></a></li>

                    <?php } ?>
                </ul>
            </li>

        </ul>
    </div>

</nav>