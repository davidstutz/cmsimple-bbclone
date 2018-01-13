<?php

/**
 * The autoloader.
 *
 * PHP version 5
 *
 * @category  CMSimple_XH
 * @package   bbclone
 * 
 * @author David Stutz
 * @license GPLv3
 * @package bbclone
 */


/**
 * Autoloads the plugin classes.
 *
 * @param string $class A class name.
 *
 * @return void
 *
 * @global array The paths of system files and folders.
 */
function BBClone_autoload($class)
{
    global $pth;

    $parts = explode('\\', $class, 2);
    if ($parts[0] == 'BBClone') {
        include_once __DIR__ . '/' . $parts[1] . '.php';
    }
}
spl_autoload_register('BBClone_autoload');