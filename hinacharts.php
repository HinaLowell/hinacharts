<?php

/**
 * The plugin entrypoint
 *
 * @author    Hina Lowell <hina.lowell.0202@gmail.com>
 * @copyright 2022 Hina Lowell
 * @license   GPL-3.0
 *
 * @wordpress-plugin
 * Plugin Name: HinaCharts
 * Plugin URI:  https://github.com/HinaLowell/hinacharts
 * Description: Extract values from the database and draw charts.
 * Version:     0.0.0
 * Author:      Hina Lowell
 * Author URI:  https://github.com/HinaLowell
 * License:     GPL-3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: hinacharts
 * Domain Path: /language
 * Update URI:  https://example.com/hinacharts
 */

require_once plugin_dir_path(__FILE__) . "widget/chart.php";

add_action("plugins_loaded", function () {
    load_plugin_textdomain(
        "hinacharts",
        false,
        dirname(plugin_basename(__FILE__)) . "/language"
    );
});

add_action("widgets_init", function () {
    register_widget(new HinaCharts\Widget\Chart());
});
