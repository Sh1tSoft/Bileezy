<?php
require 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#E91E63" id="theme_color">
    <title>Bileezy</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="assets/css/master.css">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

</head>

<!-- BODY (start) -->
<body>
<!-- HEADER (start) -->
<header class="header__main container">
    <div class="row">
        <!-- Header logo -->
        <a class="header__logo col-md-3" href="#"><img src="assets/img/logo.png"></a>
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
            <a href="#">Opret konto</a>
            <a href="#">Log ind</a>
        </div>
    </div>
    <div class="header__divider"></div>
</header>
<!-- Header (end) -->