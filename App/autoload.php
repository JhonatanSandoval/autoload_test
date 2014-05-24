<?php
/**
 * Created by PhpStorm.
 * User: jhonatan
 * Date: 23/05/14
 * Time: 06:45 PM
 */

    define( 'DS' , DIRECTORY_SEPARATOR);

    function __autoload($className)
    {

        $className = '..' . DS . str_replace('\\', DS, $className) . '.php';

        if ( !file_exists($className) ) {
            throw new Exception('file path "{$className}" not found. ');
        }

        require_once $className;

    }