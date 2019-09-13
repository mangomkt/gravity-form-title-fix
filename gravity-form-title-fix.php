<?php
/*
Plugin Name: Gravity Form Title Fix
Plugin URI: https://github.com/mangomkt/gravity-form-title-fix
Description: Change Gravity Form Title To an H5
Version: 0.4
Author: Curtis Grant
*/

add_filter( 'gform_get_form_filter', function ( $form_string, $form ) {
    $form_string = preg_replace("/<h3 class='gform_title'>(.*?)<\/h3>/", "<div class='gform_title'>$1</div>", $form_string);
    $form_string = preg_replace("/<h2 class='gsection_title'>(.*?)<\/h2>/", "<div class='gsection_title'>$1</div>", $form_string);
    $form_string = preg_replace("/<h3 class='gf_progressbar_title'>(.*?)<\/h3>/s", "<div class='gf_progressbar_title'>$1</div>", $form_string);
    return $form_string;
}, 10, 2 );