<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#E91E63" id="theme_color">
    <title><?=$pageTitle?> | Bileezy</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="<?=$root?>/assets/css/master.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="<?=$root?>/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?=$root?>/favicon.ico" type="image/x-icon"/>

</head>

<!-- BODY (start) -->
<body>
<!-- HEADER (start) -->
<header class="header__main container">
    <div class="row">
        <!-- Header logo -->
        <a class="header__logo col-md-3 col-5" href="#"><img src="<?=$root?>/assets/img/logo.png"></a>
        <!-- RESPONSIVE ICONS -->
        <nav class="header__responsive--icons col">
            <i class="material-icons">person</i>
            <i class="material-icons">menu</i>
        </nav>
        <!-- Search bar -->
        <div class="col-lg-6 col-md-5">
            <div class="input-group header__search">
                <input type="text" class="form-control header__search--input" placeholder="Søg på bilmærker her...">
                <span class="input-group-btn header__search--span">
                    <button class="btn btn-secondary header__search--button" type="button">SØG</button>
                </span>
            </div>
        </div>
        <!-- Account & Login -->
        <div class="header__account col-lg-3 col-md-4">
          <?php if (!empty($_SESSION['email'])) : ?>
          <?php else: ?>
              <a <?php if (basename($_SERVER['PHP_SELF']) == "login.php") ?> href="<?=$root?>/regi.php">Opret Konto</a>
              <a <?php if (basename($_SERVER['PHP_SELF']) == "login.php") ?> href="<?=$root?>/login.php">Log ind</a>
          <?php endif; ?>
          <?php if (basename($_SERVER['PHP_SELF']) != "index.php") : ?>
          <?php endif;?>
          <?php if (!empty($_SESSION['email'])) : ?>
          <?php endif; ?>
      <?php if (!empty($_SESSION['email'])) : ?>
          <?php if(!empty($value) && $value == 1) : ?>
          <?php else: ?>
          <?php endif; ?>
            <a href="<?=$root?>/account.php">Konto</a>
            <a href="<?=$root?>/login.php?logout=true">Log ud</a>
      <?php endif; ?>
        </div>
    </div>
    <!-- DIVIDER -->
    <div class="header__divider"></div>

    <!-- NAVBAR -->
    <nav class="header__nav">
        <ul>
            <li><a href="<?=$root?>/index.php">Forside</a></li>
            <li><a href="<?=$root?>/products-list.php">Bilannoncer</a></li>
            <li><a href="#">Om</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </nav>


</header>
<!-- HEADER (end) -->
