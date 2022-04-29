<?php

require_once('awsv4.php');

add_action('wp_ajax_fetch_product', 'fetch_product');

function fetch_product() {
	global $wpdb;
	echo AwsV4::fetch_product($_POST['productId']);
	wp_die();
}
