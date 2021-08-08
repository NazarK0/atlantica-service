<?php

function konstruksy_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = 'http://wordpress.altdesain.com/konstruksy';
	$demos_array			 = array(
			'construction'		 => array(
			'title'			 => esc_html__( 'Konstruksy - Construction Import', 'konstruksy' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/zlib-screenshoot/screenshot-construction.png',
			'preview_link'	 => esc_url( 'https://wordpress.altdesain.com/konstruksy/construction/' ),
		),
	);
	$download_url			 = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo			 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', 'konstruksy_fw_ext_backups_demos' );