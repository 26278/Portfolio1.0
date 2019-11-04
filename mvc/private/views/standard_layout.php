<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $this->section( 'page_title', 'Standaard pagina titel') ?></title>
    <link rel="stylesheet" href="<?= url('/css/reset.css')?>">
    <link rel="stylesheet" href="<?= url('/css/master.css' ) ?>" media="all">
    <link rel="stylesheet" href="<?= url('/css/' . $this->section('css') . '.css') ?>">
    <link rel="stylesheet" href="https://use.typekit.net/xkm2tim.css">
</head>
<body class="body">
<!-- Menu for mobile version -->
<!-- menu content -->
<nav id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="<?= url('/') ?>">Home pagina</a>
    <a href="<?= url('/projecten') ?>">Projecten</a>
    <a href="<?= url('/over_mij') ?>">Over mij</a>
    <a href="<?= url('/contact') ?>">Contact</a>
    <a href="<?= url('/blog') ?>">Blog</a>
</nav>
<!-- page -->
<div id="all">
    <header class="header">
        <div class="head">
            <div class="head__content">
                <h3 class="head__content--title">Jochem de Wit - Portfolio</h3>
                <span onclick="openNav()">
                    <svg class="head__nav" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                    </svg>
                </span>
            </div>
            <div class="head__topnav">
                <a href="<?= url('/') ?>">Homepagina</a>
                <a href="<?= url('/projecten') ?>">Projecten</a>
                <a href="<?= url('/over_mij') ?>">Over mij</a>
                <a href="<?= url('/contact') ?>">Contact</a>
                <a href="<?= url('/blog') ?>">Blog</a>
            </div>
        </div>
    </header>
            <?php echo $this->section( 'content' ) ?>
    <footer class="footer">
            <div class="footer__copyright">
                <p class="copyright__text">&copy; Copyright <?php echo date( 'Y' ) ?></p>
                <p>Jochem de Wit</p>
            </div>
            <div class="footer__media">
                <a class="media__a" href="">LinkedIn</a>
                <a class="media__a" href="">GitHub</a>
            </div>
    </footer>
</div>
<script src="<?php echo url( '/js/nav.js' ) ?>"></script>
</body>
</html>