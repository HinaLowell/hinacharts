<?php

/**
 * Chart widget
 *
 * @author    Hina Lowell <hina.lowell.0202@gmail.com>
 * @copyright 2022 Hina Lowell
 * @license   GPL-3.0
 */

namespace HinaCharts\Widget
{
    /**
     * Chart widget class
     */
    class Chart extends \WP_Widget
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            $widget_options = array(
                "classname"   => "chart",
                "description" => __("Extract values from the database and draw charts.", "hinacharts")
            );
            parent::__construct(
                "hinacharts",
                __("HinaCharts", "hinacharts"),
                $widget_options
            );
        }

        /**
         * Echoes the widget content
         *
         * @param array $args     Display arguments
         * @param array $instance The settings for the particular instance of the widget
         */
        public function widget($args, $instance)
        {
        }

        /**
         * Updates a particular instance of a widget
         *
         * @param array $new_instance New settings for this instance
         * @param array $old_instance Old settings for this instance
         * @return array Settings to save or bool false to cancel saving
         */
        public function update($new_instance, $old_instance)
        {
            return $new_instance;
        }

        /**
         * Outputs the settings update form
         *
         * @param array $instance Current settings
         */
        public function form($instance)
        {
        }
    }
}
