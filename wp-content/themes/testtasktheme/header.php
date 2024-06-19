<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php echo wp_get_document_title(); ?>
    </title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-secondary border-bottom">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1"><?php bloginfo('name'); ?></span>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_page_link_by_title('all-news'); ?>">Новости</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-logout">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <div class="d-flex flex-row align-items-center">
                                <?php 
                                    if (is_user_logged_in()) {
                                        $current_user = wp_get_current_user();
                                        $edit_profile_url = get_edit_profile_url($current_user->ID);
                                        echo '<a class="nav-link" href="'. $edit_profile_url .'">' . $current_user->first_name . ' ' . $current_user->last_name . '</a>';
                                        echo '<a class="btn btn-sm btn-danger" href="' . wp_logout_url() . '">Выйти</a>';
                                    } else {
                                        echo '<a class="nav-link" href="'. wp_login_url() .'">Войти</a>';
                                        echo '<a class="nav-link" href="'. wp_registration_url() .'">Зарегистрироваться</a>';
                                    }
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
