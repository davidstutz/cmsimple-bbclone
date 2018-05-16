<?php
/* utf8-marker = äöüß */
/**
 * @file admin.php
 * @brief Admin area.
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
 
if (!class_exists('BBClone')) require dirname(__FILE__)."/bbclone.php";

if (function_exists('XH_registerStandardPluginMenuItems'))
{
    XH_registerStandardPluginMenuItems(true);
}

if ((function_exists('XH_wantsPluginAdministration') AND XH_wantsPluginAdministration('bbclone')) OR isset($bbclone))
{
	global $sn, $plugin_tx;

	$f = "bbclone";
	
	/* initvar() for POST AND GET support. */
	initvar('admin');
	
	$o .= print_plugin_admin('ON');
	
	/* Plugin info. */
	if ($admin === '') 
	{
		$o .= '<p class="bbclone-head"><b>' . BBClone::name() . '</b></p>'
				. '<div class="bbclone-notice">'
				. 'Version: <b>' . BBClone::VERSION . '</b><br />'
				. '</div>'
				. '<div class="bbclone-help">'
				. 'Released: ' . BBClone::release_date() . '<br />'
				. 'Author: ' . BBClone::author() . '<br />'
				. 'Website: ' . BBClone::website() . '<br />'
				. 'GitHub Repository: ' . BBCLone::github() . '<br />'
				. BBClone::donate() . '<br />'
				. BBClone::description() . '<br />'
				. BBClone::legal() . '<br />'
				. '</div>';
	}
	
	if ($admin == 'plugin_main')
	{
		$action = isset($_GET['action']) ? $_GET['action'] : 'plugin_text';
		$help = isset($_GET['help']) ? TRUE : FALSE;
		
		$o .= '<p class="bbclone-head"><b>' . $plugin_tx["bbclone"]["See your statistics"] . '</b><span style="float: right;"><a href="' . page_url() . '&help"><img src="' . $pth['folder']['plugins'] . 'bbclone/images/help.png" /></a></span></p>'
			.'<p>';
		
		if ($help)
		{
			$o .= '<p class="bbclone-help">' . $plugin_tx['bbclone']['The statistics will be displayed using an external tool to get the best possible overview over the user\'s behaviour on your website.'] . '</p>';
		}
		
		$o .= '<a class="bbclone-statistics" target="_blank" href="' . $sn . 'bbclone">' . $plugin_tx['bbclone']['Go to statistics.'] . '</a>';
		
		$o .= '</p>';
	}
	
	if ($admin != 'plugin_main')
	{
		$hint = array(
			'mode_donotshowvarnames' => FALSE,
		);

		$o .= plugin_admin_common($action, $admin, $plugin, $hint);
	}
}

