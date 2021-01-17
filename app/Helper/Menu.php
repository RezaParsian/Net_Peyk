<?php

namespace App\Helper;

class Menu
{
    public static function SetActive($route)
    {
        if (is_array($route)) {
            // return in_array(Request()->path(), $route) ? 'active' : '';
            foreach ($route as $value) {
                if (Request()->is($value)) {
                    return 'active';
                }
            }
            return '';
        }
        return Request()->is($route) ? 'active' : '';
    }
}
