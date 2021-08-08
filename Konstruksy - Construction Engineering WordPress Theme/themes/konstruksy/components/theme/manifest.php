<?php if (!defined('ABSPATH')) die('Direct access forbidden.');

$manifest = array();

$manifest[ 'name' ]			 = 'konstruksy';
$manifest[ 'uri' ]			 = esc_url( 'https://altdesain.com/' );
$manifest[ 'description' ]	 = esc_html__( 'Konstruksy Theme', 'konstruksy' );
$manifest[ 'version' ]		 = '1.0';
$manifest[ 'author' ]			 = 'Alt-Desain';
$manifest[ 'author_uri' ]		 = esc_url( 'https://altdesain.com/' );
$manifest[ 'requirements' ]	 = array(
	'wordpress' => array(
		'min_version' => KONSTRUKSY_MINWP_VERSION,
	),
);

$manifest[ 'id' ] = 'scratch';

$manifest[ 'supported_extensions' ] = array(
	'backups'		 => array(),
);


?>
