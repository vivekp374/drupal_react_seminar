<?php

namespace Drupal\react\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a react webpack block.
 *
 * @Block(
 *   id = "react_webpack_block",
 *   admin_label = @Translation("React Webpack"),
 *   category = @Translation("Custom")
 * )
 */
class ReactWebpackBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => '<div id="like_button_container_react_webpack"></div>',
      '#attached' => [
        'library' => 'react/my_react_webpack',
      ],
    ];
    return $build;
  }

}
