<?php

require_once(plugin_dir_path( __DIR__ ) . 'render/render-block.php');

function register_amazon_product_block() {
  // Scripts
  wp_register_script(
    'amazon-product-block-script',
    plugins_url('js/block.min.js', __DIR__), // Block Registeration in script
    array('wp-blocks','wp-editor', 'wp-components', 'wp-element'),
    filemtime( plugin_dir_path( __DIR__ ) . 'js/block.min.js'),
    true // Load script in footer
  );

  // Styles
  wp_register_style(
    'amazon-product-block-editor-style',
    plugins_url('css/editor.css', __DIR__), // Block Editor Style
    array('wp-edit-blocks'), // Dependency to include the CSS after it.
    filemtime( plugin_dir_path( __DIR__ ) . 'css/editor.css')
  );
  wp_register_style(
		'amazon-product-block-frontend-style',
		plugins_url('css/style.css', __DIR__ ), // Block editor CSS.
		array(), // Dependency to include the CSS after it.
		filemtime( plugin_dir_path( __DIR__ ) . 'css/style.css')
  );

  // Register Block
	register_block_type('blocks/amazon-product', array(
		'editor_script' => 'amazon-product-block-script',
		'editor_style' => 'amazon-product-block-editor-style',
    'style' => 'amazon-product-block-frontend-style',
    'render_callback' => 'render_product'
	) );
}
   
add_action('init', 'register_amazon_product_block');