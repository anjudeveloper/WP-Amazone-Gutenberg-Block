<?php

function render_product($attributes) {
  if (is_admin()) {
    return '';
  } else {
    $html = '';
    if (!!$attributes["url"] && !!$attributes['productImage']) {
      $html = '<div class="review-feature">
        <a
          href="' . $attributes["buyLink"] . '"
          rel="nofollow"
          target="_blank"
        >
          <div class="the-container secondary">
            <span class="award">' . $attributes["category"] . '</span>
            <div>
              <div>
                <div class="all-content">
                  <div class="image-content">
                    <span class="image-link merchant-link">
                      <figure class="the-image">
                        <img
                          class="product-image image-secondary"
                          src="' . $attributes["productImage"] . '"
                        >
                      </figure>
                    </span>
                  </div>
                  <div class="text-content">
                    <h3 class="headline">
                      <span class="product-link">
                        ' . $attributes["headline"] . '
                      </span>
                    </h3>
                    <span class="subtitle">
                      <span class="merchant-link" id="product-link-subtitle">
                        ' . $attributes["price"] . '
                      </span>
                    </span>
                    <p class="review-exerpt">' . $attributes["review"] . '</p>
                    <div>
                      <div class="box-button">
                        <span class="button-link merchant-link">
                          <span>' . $attributes["checkPrice"] . '</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="review-footer">
              <span class="the-disclaimer">We earn a commission if you click this link & make a purchase.</span>
            </div>
          </div>
        </a>
      </div>';
    }
    return $html;
  }
}