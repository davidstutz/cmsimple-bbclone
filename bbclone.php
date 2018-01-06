<?php
/* utf8-marker = äöüß */
/**
 * @file bbclone.php
 * @brief Containing class BBClone.
 * 
 * @author David Stutz
 * @license GPLv3
 * @package bbclone
 * @see http://sourceforge.net/projects/cmsimplebbclone/
 * 
 *  This file is part of the bbclone plugin for CMSimple.
 *
 *  The plugin is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The plugin is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  @see <http://www.gnu.org/licenses/>.
 */
/*! \mainpage CMSimple BBClone
 *
 * This plugin integrated BBClone with CMSimple.
 *
 * This is  a generated documentation of the plugin.
 * 
 * \mainpage
 */

if (!function_exists('page_url'))
{
	/**
	 * Detect root.
	 * 
	 * @return <string> root
	 */
	function page_url()
	{
		$url = 'http';
		if (isset($_SERVER["HTTPS"])
			AND $_SERVER["HTTPS"] == "on")
		{
			$url .= "s";
		}
		$url .= "://";
		if ($_SERVER["SERVER_PORT"] != "80")
		{
			$url .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
		}
		else
		{
			$url .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		}
		return $url;
	}
}
 
/**
 * @class BBClone
 * 
 * BBClone class for genheral plugin information and trakcing initialization.
 * 
 * @author David Stutz
 * @since 1.0.0
 * @package bbclone
 */
class BBClone {
	
	/**
	 * Version.
	 */
	const VERSION = '1.0.1';
	
	/**
	 * @static
	 * @public
	 * Get plugin's name.
	 * 
	 * @return <string> name
	 */
	public static function name()
	{
		return "BBClone Plugin";
	}

	/**
	 * @static
	 * @public
	 * Get plugin's release date.
	 * 
	 * @return <string> release date.
	 */
	public static function release_date() 
	{
	   return "January 6th 2018";
	}

	/**
	 * @static
	 * @public
	 * Get plugin's author.
	 * 
	 * @return <string> author.
	 */
	public static function author()
	{
		return "David Stutz";
	}
	
	/**
	 * @static
	 * @public
	 * Get plugin's website.
	 * 
	 * @return <string> website link
	 */
	public static function website()
	{
		return '<a href="http://davidstutz.de/projects/cmsimple/" target="_blank">Project\'s Website</a>';
	}
	
    /**
	 * @static
	 * @public
	 * Get plugin's website.
	 * 
	 * @return <string> website link
	 */
	public static function github()
	{
		return '<a href="https://github.com/davidstutz/cmsimple-bbclone" target="_blank">GitHub Repository</a>';
	}
    
	/**
	 * @static
	 * @public
	 * Get plugin's description.
	 * 
	 * @return <string> description
	 */
	public static function description()
	{
		return 'This plugin integrate BBClonse with CMSimple.';
	}
	
	/**
	 * @static
	 * @public
	 * Get plugin's legal.
	 * 
	 * @return <string> legal
	 */
	public static function legal()
	{
		return 'This plugin is published under the GNU Public License version 3. See <a href="http://www.gnu.org/licenses/">Licenses</a> for more information.';
	}
	
	/**
	 * @static
	 * @public
	 * Get bbclone's legal.
	 * 
	 * @return <string> legal
	 */
	public static function bbclone_legal()
	{
		return 'BBClone is published under the GNU Public License. See <a href="http://www.gnu.org/licenses/">Licenses</a>.';
	}
	
	/**
	 * @public
	 * @static
	 * Main tracking initialization.
	 */
	public static function init()
	{
		global $pth, $txc, $adm, $plugin_cf, $h, $s;
		
		static $bbclone_initialized = FALSE;
		
		if (!$bbclone_initialized
			AND !defined('_BBCLONE_DIR')
			AND (!$adm
				OR $plugin_cf['bbclone']['track_backend'] == 'true'))
		{
			if ($s >= 0)
			{
				define("_BBC_PAGE_NAME", $h[$s]);
			}
			elseif (isset($h[0]))
			{
				define("_BBC_PAGE_NAME", $h[0]);
			}
			else
			{
				define("_BBC_PAGE_NAME", $txc['site']['title']);
			}
			
			define('_BBCLONE_DIR', $pth['folder']['base'] . 'bbclone/');  
			define('COUNTER', _BBCLONE_DIR . 'mark_page.php');  
			if (is_readable(COUNTER))
			{
				include_once(COUNTER);  
			}
			
			$bbclone_initialized = TRUE;
		}
	}
}
?>