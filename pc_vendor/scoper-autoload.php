<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('Composer\Autoload\ClassLoader', false) && !interface_exists('Composer\Autoload\ClassLoader', false) && !trait_exists('Composer\Autoload\ClassLoader', false)) {
    spl_autoload_call('PcLocations_001\Composer\Autoload\ClassLoader');
}
if (!class_exists('ComposerAutoloaderInit3b3807b0c3cb8d8845db3699b3947523', false) && !interface_exists('ComposerAutoloaderInit3b3807b0c3cb8d8845db3699b3947523', false) && !trait_exists('ComposerAutoloaderInit3b3807b0c3cb8d8845db3699b3947523', false)) {
    spl_autoload_call('PcLocations_001\ComposerAutoloaderInit3b3807b0c3cb8d8845db3699b3947523');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('wp_normalize_path')) {
    function wp_normalize_path() {
        return \PcLocations_001\wp_normalize_path(...func_get_args());
    }
}
if (!function_exists('maybe_unserialize')) {
    function maybe_unserialize() {
        return \PcLocations_001\maybe_unserialize(...func_get_args());
    }
}
if (!function_exists('set_transient')) {
    function set_transient() {
        return \PcLocations_001\set_transient(...func_get_args());
    }
}
if (!function_exists('get_transient')) {
    function get_transient() {
        return \PcLocations_001\get_transient(...func_get_args());
    }
}
if (!function_exists('delete_transient')) {
    function delete_transient() {
        return \PcLocations_001\delete_transient(...func_get_args());
    }
}
if (!function_exists('wp_strip_all_tags')) {
    function wp_strip_all_tags() {
        return \PcLocations_001\wp_strip_all_tags(...func_get_args());
    }
}
if (!function_exists('wp_die')) {
    function wp_die() {
        return \PcLocations_001\wp_die(...func_get_args());
    }
}
if (!function_exists('wp_json_encode')) {
    function wp_json_encode() {
        return \PcLocations_001\wp_json_encode(...func_get_args());
    }
}
if (!function_exists('wp_upload_dir')) {
    function wp_upload_dir() {
        return \PcLocations_001\wp_upload_dir(...func_get_args());
    }
}
if (!function_exists('sanitize_text_field')) {
    function sanitize_text_field() {
        return \PcLocations_001\sanitize_text_field(...func_get_args());
    }
}
if (!function_exists('is_admin')) {
    function is_admin() {
        return \PcLocations_001\is_admin(...func_get_args());
    }
}
if (!function_exists('get_current_screen')) {
    function get_current_screen() {
        return \PcLocations_001\get_current_screen(...func_get_args());
    }
}
if (!function_exists('add_meta_box')) {
    function add_meta_box() {
        return \PcLocations_001\add_meta_box(...func_get_args());
    }
}
if (!function_exists('wp_enqueue_style')) {
    function wp_enqueue_style() {
        return \PcLocations_001\wp_enqueue_style(...func_get_args());
    }
}
if (!function_exists('wp_register_script')) {
    function wp_register_script() {
        return \PcLocations_001\wp_register_script(...func_get_args());
    }
}
if (!function_exists('wp_add_inline_script')) {
    function wp_add_inline_script() {
        return \PcLocations_001\wp_add_inline_script(...func_get_args());
    }
}
if (!function_exists('wp_localize_script')) {
    function wp_localize_script() {
        return \PcLocations_001\wp_localize_script(...func_get_args());
    }
}
if (!function_exists('wp_enqueue_script')) {
    function wp_enqueue_script() {
        return \PcLocations_001\wp_enqueue_script(...func_get_args());
    }
}

return $loader;
