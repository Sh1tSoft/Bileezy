<?php
require 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#E91E63" id="theme_color">
    <title><?=$pageTitle?> | Bileezy</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="<?=$root?>/assets/css/master.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600" rel="stylesheet">
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
        <a class="header__logo col-md-3" href="#"><img src="<?=$root?>/assets/img/logo.png"></a>
        <!-- Search bar -->
        <div class="col-md-6">
            <div class="input-group header__search">
                <input type="text" class="form-control header__search--input" placeholder="Søg på bilmærker her...">
                <span class="input-group-btn header__search--span">
                    <button class="btn btn-secondary header__search--button" type="button">SØG</button>
                </span>
            </div>
        </div>
        <!-- Account & Login -->
        <div class="header__account col-md-3">
          <?php
          if (session_status() == PHP_SESSION_NONE) {
              session_start();
          }
          ?>

          <?php if (!empty($_SESSION['email'])) : ?>
          <?php else: ?>
              <a <?php if (basename($_SERVER['PHP_SELF']) == "login.php") { echo 'class="active-link"'; } ?> href="<?=$root?>/login.php">Opret Konto</a>
              <a <?php if (basename($_SERVER['PHP_SELF']) == "login.php") { echo 'class="active-link"'; } ?> href="<?=$root?>/login.php">Log ind</a>
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
    <section class="header__nav">
        <ul>
            <li><a href="<?=$root?>index.php">Forside</a></li>
            <li><a href="<?=$root?>/products.php">Bilannoncer</a></li>
            <li><a href="#">Om</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </section>


</header>
<!-- HEADER (end) -->
