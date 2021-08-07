<?php 
/**
 * Trait Singleton
 * @package aquila WordPress Theme
 */


namespace AQUILA_THEME\Inc\Traits;


trait Singleton
{
    /**
     * Protected class constructor to prevent direct object creation
     * Protected clone method prevent cloning class
     */
    protected function __construct(){}
    final protected function __clone(){}


    final public static function get_instance()
    {
         //Collection of instance.
        static $instance = [];

        $called_class = get_called_class();

        if (!isset($instance[$called_class])) {

            $instance[$called_class] = new $called_class();
            
            //Dependent items can use the `aquila_theme_singleton_init_{$called_class}` hook to execute code
          
            do_action(sprintf('aquila_theme_singleton_init_%s', $called_class)); 
            // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores

        }

        return $instance[$called_class];
    }
} 