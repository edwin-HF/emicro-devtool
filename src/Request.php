<?php


namespace EMicro;


/**
 * Class Request
 * @package EMicro
 */
class Request
{

    /**
     * @param string $param
     * @param string $default
     * @return mixed
     */
    public static function get($param = '', $default=''){}

    /**
     * @param string $param
     * @param string $default
     * @return mixed
     */
    public static function post($param = '', $default=''){}

    /**
     * @param string $param
     * @param string $default
     * @return mixed
     */
    public static function input($param = '', $default=''){}

    /**
     * @param string $param
     * @param string $default
     * @return mixed
     */
    public static function server($param = '', $default=''){}

    /**
     * @param string $param
     * @param string $default
     * @return mixed
     */
    public static function cookie($param = '', $default=''){}

    /**
     * @param string $param
     * @return mixed
     */
    public static function files($param = ''){}

    /**
     * @param string $param
     * @param string $default
     * @return mixed
     */
    public static function header($param = '', $default=''){}

    /**
     * @return bool
     */
    public static function isPost(){}

    /**
     * @return bool
     */
    public static function isGet(){}

    /**
     * @return bool
     */
    public static function isPut(){}

    /**
     * @return bool
     */
    public static function isDelete(){}

    /**
     * @return bool
     */
    public static function isPatch(){}

    /**
     * @return bool
     */
    public static function isHead(){}


    public function __call($name, $arguments)
    {
    }


}