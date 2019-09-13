<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SayItRight</title>
<link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/sayitright.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css"); ?>">
</head>

<body class="<?php if (isset($show_modal)) { echo "modal-open"; } ?>">
    <header class="bg-blue">
        <nav class="navbar navbar-expand-lg navbar-light wrapper">
            <a class="navbar-brand" href=".">
                <img src="<?php echo base_url("assets/images/logo.png"); ?>" alt="" srcset="">
            </a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <?php foreach ($page_directory as $key => $value) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url($value) ?>"><?php echo $key; ?></a>
                    </li>
                <?php } ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("about-us") ?>">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("#") ?>">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("buy-from-us") ?>">buy from us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("contact-us") ?>">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("signup") ?>">sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("login") ?>">login</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </header>