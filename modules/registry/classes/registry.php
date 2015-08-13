<?php
abstract class Registry
{
    private static $registry = array();

    public static function set($name,$value)
    {
        if(!isset(self::$registry[$name]))
        {
            self::$registry[$name] = $value;
        }
        else
        {
            throw new Exception("Cannot overwrite var " . $name);
        }
    }

    public static function remove($name)
    {
        if(isset(self::$registry[$name]))
        {
            unset(self::$registry[$name]);
        }
        else
        {
            throw new Exception("Cannot remove non-existing var " . $name);
        }
    }

    public static function get($name)
    {
        if(isset(self::$registry[$name]))
        {
            return self::$registry[$name];
        }
        else
        {
            throw new Exception("Cannot get non-existing var " . $name);
        }
    }

    public static function clear()
    {
        self::$registry = array();
    }
}
