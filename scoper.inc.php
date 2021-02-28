<?php

declare(strict_types=1);

use Isolated\Symfony\Component\Finder\Finder;

return array(
	// The prefix configuration. If a non null value will be used, a random prefix will be generated.
	'prefix'                     => 'PCdVendor',

	// By default when running php-scoper add-prefix, it will prefix all relevant code found in the current working
	// directory. You can however define which files should be scoped by defining a collection of Finders in the
	// following configuration key.
	//
	// For more see: https://github.com/humbug/php-scoper#finders-and-paths
	'finders'                    => array(
		// Finder::create()->files()->in( 'src' ),
		Finder::create()
			->files()
			->ignoreVCS( true )
			->notName( '/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.json|composer\\.lock/' )
			->exclude(
				array(
					'doc',
					'test',
					'test_old',
					'tests',
					'Tests',
					'vendor-bin',
				)
			)
			->in( 'vendor' ),
		Finder::create()->append(
			array(
				'composer.json',
			)
		),
	),

	// Whitelists a list of files. Unlike the other whitelist related features, this one is about completely leaving
	// a file untouched.
	// Paths are relative to the configuration file unless if they are already absolute
	'files-whitelist'            => array(
		'src/a-whitelisted-file.php',
	),

	// When scoping PHP files, there will be scenarios where some of the code being scoped indirectly references the
	// original namespace. These will include, for example, strings or string manipulations. PHP-Scoper has limited
	// support for prefixing such strings. To circumvent that, you can define patchers to manipulate the file to your
	// heart contents.
	//
	// See: https://github.com/humbug/php-scoper#patchers.
	'patchers'                   => array(
		function ( $file_path, $prefix, $contents ) {
			/*
			 * There is currently no easy way to simply whitelist all global WordPress functions.
			 *
			 * This list here is a manual attempt after scanning through the AMP plugin, which means
			 * it needs to be maintained and kept in sync with any changes to the dependency.
			 *
			 * As long as there's no built-in solution in PHP-Scoper for this, an alternative could be
			 * to generate a list based on php-stubs/wordpress-stubs. devowlio/wp-react-starter/ seems
			 * to be doing just this successfully.
			 *
			 * @see https://github.com/humbug/php-scoper/issues/303
			 * @see https://github.com/php-stubs/wordpress-stubs
			 * @see https://github.com/devowlio/wp-react-starter/
			 */
			$contents = str_replace( "\\$prefix\\_doing_it_wrong", '\\_doing_it_wrong', $contents );
			$contents = str_replace( "\\$prefix\\__", '\\__', $contents );
			$contents = str_replace( "\\$prefix\\esc_html_e", '\\esc_html_e', $contents );
			$contents = str_replace( "\\$prefix\\esc_html", '\\esc_html', $contents );
			$contents = str_replace( "\\$prefix\\esc_attr", '\\esc_attr', $contents );
			$contents = str_replace( "\\$prefix\\esc_url", '\\esc_url', $contents );
			$contents = str_replace( "\\$prefix\\do_action", '\\do_action', $contents );
			$contents = str_replace( "\\$prefix\\site_url", '\\site_url', $contents );
			$contents = str_replace( "\\$prefix\\wp_guess_url", '\\wp_guess_url', $contents );
			$contents = str_replace( "\\$prefix\\untrailingslashit", '\\untrailingslashit', $contents );
			$contents = str_replace( "\\$prefix\\WP_CONTENT_URL", '\\WP_CONTENT_URL', $contents );
			$contents = str_replace( "\\$prefix\\wp_list_pluck", '\\wp_list_pluck', $contents );
			$contents = str_replace( "\\$prefix\\is_customize_preview", '\\is_customize_preview', $contents );
			$contents = str_replace( "\\$prefix\\do_action", '\\do_action', $contents );
			$contents = str_replace( "\\$prefix\\trailingslashit", '\\trailingslashit', $contents );
			$contents = str_replace( "\\$prefix\\get_template_directory_uri", '\\get_template_directory_uri', $contents );
			$contents = str_replace( "\\$prefix\\get_stylesheet_directory_uri", '\\get_stylesheet_directory_uri', $contents );
			$contents = str_replace( "\\$prefix\\includes_url", '\\includes_url', $contents );
			$contents = str_replace( "\\$prefix\\wp_styles", '\\wp_styles', $contents );
			$contents = str_replace( "\\$prefix\\get_stylesheet", '\\get_stylesheet', $contents );
			$contents = str_replace( "\\$prefix\\get_template", '\\get_template', $contents );
			$contents = str_replace( "\\$prefix\\wp_parse_url", '\\wp_parse_url', $contents );
			$contents = str_replace( "\\$prefix\\is_wp_error", '\\is_wp_error', $contents );
			$contents = str_replace( "\\$prefix\\content_url", '\\content_url', $contents );
			$contents = str_replace( "\\$prefix\\get_admin_url", '\\get_admin_url', $contents );
			$contents = str_replace( "\\$prefix\\WP_CONTENT_DIR", '\\WP_CONTENT_DIR', $contents );
			$contents = str_replace( "\\$prefix\\ABSPATH", '\\ABSPATH', $contents );
			$contents = str_replace( "\\$prefix\\WPINC", '\\WPINC', $contents );
			$contents = str_replace( "\\$prefix\\home_url", '\\home_url', $contents );
			$contents = str_replace( "\\$prefix\\__", '\\__', $contents );
			$contents = str_replace( "\\$prefix\\wp_array_slice_assoc", '\\wp_array_slice_assoc', $contents );
			$contents = str_replace( "\\$prefix\\wp_json_encode", '\\wp_json_encode', $contents );
			$contents = str_replace( "\\$prefix\\get_transient", '\\get_transient', $contents );
			$contents = str_replace( "\\$prefix\\wp_cache_get", '\\wp_cache_get', $contents );
			$contents = str_replace( "\\$prefix\\set_transient", '\\set_transient', $contents );
			$contents = str_replace( "\\$prefix\\wp_cache_set", '\\wp_cache_set', $contents );
			$contents = str_replace( "\\$prefix\\wp_using_ext_object_cache", '\\wp_using_ext_object_cache', $contents );
			$contents = str_replace( "\\$prefix\\_doing_it_wrong", '\\_doing_it_wrong', $contents );
			$contents = str_replace( "\\$prefix\\plugin_dir_url", '\\plugin_dir_url', $contents );
			$contents = str_replace( "\\$prefix\\is_admin_bar_showing", '\\is_admin_bar_showing', $contents );
			$contents = str_replace( "\\$prefix\\get_bloginfo", '\\get_bloginfo', $contents );
			$contents = str_replace( "\\$prefix\\add_filter", '\\add_filter', $contents );
			$contents = str_replace( "\\$prefix\\apply_filters", '\\apply_filters', $contents );
			$contents = str_replace( "\\$prefix\\add_query_arg", '\\add_query_arg', $contents );
			$contents = str_replace( "\\$prefix\\remove_query_arg", '\\remove_query_arg', $contents );
			$contents = str_replace( "\\$prefix\\get_post", '\\get_post', $contents );
			$contents = str_replace( "\\$prefix\\wp_scripts", '\\wp_scripts', $contents );
			$contents = str_replace( "\\$prefix\\wp_styles", '\\wp_styles', $contents );
			$contents = str_replace( "\\$prefix\\wp_style_is", '\\wp_style_is', $contents );
			$contents = str_replace( "\\$prefix\\WP_PLUGIN_URL", '\\WP_PLUGIN_URL', $contents );
			$contents = str_replace( "\\$prefix\\WPMU_PLUGIN_URL", '\\WPMU_PLUGIN_URL', $contents );
			$contents = str_replace( "\\$prefix\\wp_list_pluck", '\\wp_list_pluck', $contents );
			$contents = str_replace( "\\$prefix\\wp_array_slice_assoc", '\\wp_array_slice_assoc', $contents );
			$contents = str_replace( "\\$prefix\\wp_json_encode", '\\wp_json_encode', $contents );
			$contents = str_replace( "\\$prefix\\WP_Http", '\\WP_Http', $contents );
			$contents = str_replace( "\\$prefix\\WP_Error", '\\WP_Error', $contents );

			$contents = str_replace( "\\$prefix\\wp_upload_dir", '\\wp_upload_dir', $contents );
			$contents = str_replace( "\\$prefix\\plugins_url", '\\plugins_url', $contents );
			// $contents = str_replace( "\\$prefix\\str_contains", '\\str_contains', $contents );
			// $contents = str_replace( "\\$prefix\\esc_html_e", '\\esc_html_e', $contents );

			return $contents;
		},
	),

	// PHP-Scoper's goal is to make sure that all code for a project lies in a distinct PHP namespace. However, you
	// may want to share a common API between the bundled code of your PHAR and the consumer code. For example if
	// you have a PHPUnit PHAR with isolated code, you still want the PHAR to be able to understand the
	// PHPUnit\Framework\TestCase class.
	//
	// A way to achieve this is by specifying a list of classes to not prefix with the following configuration key. Note
	// that this does not work with functions or constants neither with classes belonging to the global namespace.
	//
	// Fore more see https://github.com/humbug/php-scoper#whitelist
	'whitelist'                  => array(
		// 'PHPUnit\Framework\TestCase',   // A specific class
		'PHPUnit\Framework\*',          // The whole namespace
		'My_Plugin\*',
		// '*',                            // Everything
	),

	// If `true` then the user defined constants belonging to the global namespace will not be prefixed.
	//
	// For more see https://github.com/humbug/php-scoper#constants--constants--functions-from-the-global-namespace
	'whitelist-global-constants' => false,

	// If `true` then the user defined classes belonging to the global namespace will not be prefixed.
	//
	// For more see https://github.com/humbug/php-scoper#constants--constants--functions-from-the-global-namespace
	'whitelist-global-classes'   => false,

	// If `true` then the user defined functions belonging to the global namespace will not be prefixed.
	//
	// For more see https://github.com/humbug/php-scoper#constants--constants--functions-from-the-global-namespace
	'whitelist-global-functions' => false,
);
