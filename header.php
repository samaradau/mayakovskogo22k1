<html>

<head>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
    <link rel='stylesheet' type='text/css' href='style/style.css'>
</head>

<body>

    <header class='container navbar navbar-expand-lg navbar-dark sticky-top menu'><a href='/mayakovskogo22k1' class='navbar-brand'>
            <div class='logo'><?php require('logo.svg');?></div>
        </a><button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <nav class='navbar-nav ml-auto text-center menu__items'>
                
                <?php
                require_once('functions.php');

                $menuItems = array(
                    "/mayakovskogo22k1/about.php" => "О проекте",
                    "/mayakovskogo22k1/activities.php" => "Активности",
                    "/mayakovskogo22k1/achievements.php" => "Достижения",
                    "/mayakovskogo22k1/blog.php" => "Блог"
                );

                $request = $_SERVER['REQUEST_URI'];

                foreach ($menuItems as $link => $title) {
                    $isActive = $request == $link ? "active" : "";
                    echo ("<li class='nav-item text-center $isActive menu__item'><a class='nav-link' href='$link'>$title</a></li>");
                }

                ?>

            </nav>
        </div>
    </header>
<div class="container mt-5 mb-5 main-content">
