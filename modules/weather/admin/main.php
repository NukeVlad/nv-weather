<?php

/**
 * @Project Weather 4.3.00
 * @Author Thuc Vinh (tichtacso.com@gmail.com)
 * @Copyright (C) 2017 Tich Tac So. All rights reserved
 * @Createdate 22/12/2017, 15:20
 */


if ( ! defined( 'NV_IS_FILE_ADMIN' ) ) die( 'Stop!!!' );

$page_title = $lang_module['list'];
$array = array();

$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . ' ORDER BY weight ASC';
$_rows = $db->query( $sql )->fetchAll();
$num = sizeof( $_rows );

if( $num < 1 )
{
	Header( 'Location: ' . NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=content' );
	die();
}

$array_status = array( $lang_module['inactive'], $lang_module['active'] );

$xtpl = new XTemplate( 'main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file );
$xtpl->assign( 'LANG', $lang_module );
$xtpl->assign( 'GLANG', $lang_global );

$i = 0;
foreach ( $_rows as $row )
{
	$row['url_edit'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=content&amp;id=' . $row['id'];

	for( $i = 1; $i <= $num; ++$i )
	{
		$xtpl->assign( 'WEIGHT', array(
			'w' => $i,
			'selected' => ( $i == $row['weight'] ) ? ' selected="selected"' : ''
		) );

		$xtpl->parse( 'main.row.weight' );
	}

	foreach( $array_status as $key => $val )
	{
		$xtpl->assign( 'STATUS', array(
			'key' => $key,
			'val' => $val,
			'selected' => ( $key == $row['status'] ) ? ' selected="selected"' : ''
		) );

		$xtpl->parse( 'main.row.status' );
	}

	$xtpl->assign( 'ROW', $row );
	$xtpl->parse( 'main.row' );
}

$xtpl->parse( 'main' );
$contents = $xtpl->text( 'main' );

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme( $contents );
include NV_ROOTDIR . '/includes/footer.php';