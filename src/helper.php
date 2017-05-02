<?php

if(!function_exists('_env')) {
    function _env($key, $default = null)
    {
        $value = getenv($key);
        if(null == $value) {
            return $default;
        }
        
        $cBool = strtolower($value);
        if( $cBool === 'true') {
            return true;
        }
        
        if($cBool === 'false') {
            return false;
        }
        
        return $value;
    }
}