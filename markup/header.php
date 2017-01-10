<?php
require 'lib.php';
require 'constants.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Epages landing</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= SITE_DIR ?>favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH . '/css/bundle.min.css' ?>"/>
</head>
<body id="js_interact-bg">
<?php include 'old-browser-warning.php'; ?>
<?php echo file_get_contents("../../img/sprite.php"); ?>
<div class="page-wrapper">
    <header class="header">
        <div class="container">
            <div class="header__wrap clearfix">
                <div class="header__logo">
                    <a href="<?= SITE_DIR ?>/main.php">
                        <img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="epages logo">
                    </a>
                </div>
                <div class="header__phones hidden-xs">
                    <div class="header__phones-text text-right">Есть вопросы? Звоните!</div>
                    <div>
                        <a href="tel:74952151340" class="header__phones-link">+7 (495) 215-13-40</a>
                        <a href="skype:epages_online" class="header__phones-link">skype: epages_online</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content">