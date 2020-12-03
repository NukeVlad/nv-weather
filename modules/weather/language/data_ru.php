<?php

/**
* @Project NUKEVIET 4.x
* @Author VINADES.,JSC <contact@vinades.vn>
* @Copyright (C) 2017 VINADES.,JSC. All rights reserved
* @Language English
* @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
* @Createdate Mar 04, 2010, 08:22:00 AM
*/

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

/**
 * Note:
 * - Module var is: $lang, $module_file, $module_data, $module_upload, $module_theme, $module_name
 * - Accept global var: $db, $db_config, $global_config
 */
$db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . " (id, location_name, location_code, weight, status) VALUES
(21, 'Nizhniy Novgorod', 520555, 8, 1);
