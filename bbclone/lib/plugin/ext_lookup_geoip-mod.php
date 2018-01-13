<?php
/* This file is part of BBClone (A PHP based Web Counter on Steroids)
 * 
 * SVN FILE $Id: ext_lookup_geoip.php 63 2013-12-05 15:19:31Z joku $
 *  
 * Copyright (C) 2001-2016, the BBClone Team (see doc/authors.txt for details)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * See doc/copying.txt for details
 */

////////////////////////////////////////////////////////////////////
// Plug-in: Extension look-up by GeoIP PHP/Perl Module (geoip.so) //
////////////////////////////////////////////////////////////////////

function bbc_extension_plugin($host, $addr) {
        return strtolower(geoip_country_code_by_name($addr));
}

?>