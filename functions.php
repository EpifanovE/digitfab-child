<?php

if (!defined('ABSPATH')) {
    die;
}

require_once "inc/assets.php";

add_filter('digitfab/core/contacts', '__return_true');
add_filter('digitfab/core/messages', '__return_true');
add_filter('digitfab/core/cf7-database-messages', '__return_true');
add_filter('digitfab/core/rank-math', '__return_true');
add_filter('digitfab/core/wp-mail-smtp', '__return_true');
add_filter('digitfab/core/cookie-notice', '__return_true');
add_filter('digitfab/core/services', '__return_true');
