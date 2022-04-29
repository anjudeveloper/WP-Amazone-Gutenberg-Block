<?php

function amazon_product_options_page() {
  ?>
  <div>
    <h2>Amazon Products Settings</h2>
    <form method="post" action="options.php">
      <?php settings_fields('amazon_product_options_group'); ?>
      <table>
        <tr>
          <th scope="row">
            <label for="affiliate_tag">Affiliate Tag</label>
          </th>
          <td>
            <input
              type="text"
              id="affiliate_tag"
              name="affiliate_tag"
              value="<?php echo get_option('affiliate_tag'); ?>"
            />
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="access_key">Access Key</label>
          </th>
          <td>
            <input
              type="text"
              id="access_key"
              name="access_key"
              value="<?php echo get_option('access_key'); ?>"
            />
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="secret_key">Secret Key</label>
          </th>
          <td>
            <input
              id="secret_key"
              name="secret_key"
              type="password"
              value="<?php echo get_option('secret_key'); ?>"
            />
          </td>
        </tr>
      </table>
      <?php submit_button(); ?>
    </form>
  </div>
<?php
}
