<?php 
/**
 * @author cesardluis
 * @copyright 2013
 */
include_once( 'tmpl.class.php' );

$data = array(
	'title' => "Simple Template PHP (tmpl)", 
	'text' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.");

$template = new tmpl("template.tpl", $data);

$template->display();

?>