<?php


    Class Event
    {
        private static $events = [];

        public static function listen($name, $callback)
        {
            self::$events[$name][] = $callback;
        }

        public static function trigger($name)
        {
            foreach (self::$events[$name] as $event => $callback) {
                call_user_func($callback);
            }
        }

    }