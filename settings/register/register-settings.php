<?php

function register_amazon_product_settings() {
  add_option('affiliate_tag', '');
  register_setting('amazon_product_options_group', 'affiliate_tag', 'affiliate_tag_callback');
  add_option('access_key', '');
  register_setting('amazon_product_options_group', 'access_key', 'access_key_callback');
  add_option('secret_key', '');
  register_setting('amazon_product_options_group', 'secret_key', 'secret_key_callback');
}

add_action('admin_init', 'register_amazon_product_settings');

function register_amazon_product_options_page() {
  add_options_page(
    'Amazon Product Setting',
    'Amazon Product Settings',
    'manage_options',
    'amazon_product',
    'amazon_product_options_page'
  );
}

add_action('admin_menu', 'register_amazon_product_options_page');
