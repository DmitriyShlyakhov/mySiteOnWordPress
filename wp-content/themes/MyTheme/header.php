<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Shlyakhov Dmitriy</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/libs/boostrap/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/libs/linea/styles.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/skins/<?
        $options = get_option('sample_theme_options');
        echo $options['selectinput']; ?>.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/media.css" />
    <? wp_head(); ?>
</head>
<body>

<div class="loader">
    <div class="loader_inner"></div>
</div>

<header class="main_head" data-parallax="scroll" data-image-src="<?= get_template_directory_uri(); ?>/img/bg.jpg" data-z-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo_container">
                    <a href="http://nure.ua/" target="_blank">
                        <? dynamic_sidebar('logo'); ?>
                    </a>
                </div>
                <button class="toggle_mnu">
            <span class="sandwich">
              <span class="sw-topper"></span>
              <span class="sw-bottom"></span>
              <span class="sw-footer"></span>
            </span>
                </button>
                <nav class="top_mnu">
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#resume">Resume</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contacts">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="top_wrapper">
        <div class="top_descr">
            <div class="top_centered">
                <div class="top_text">
                    <h1><?= get_bloginfo('name'); ?></h1>
                    <p><?=  get_bloginfo('description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</header>