<?php

namespace Drupal\react\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a react root block.
 *
 * @Block(
 *   id = "react_react_root",
 *   admin_label = @Translation("React Root"),
 *   category = @Translation("Custom")
 * )
 */
class ReactRootBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => '<div id="like_button_container"></div>',
      '#attached' => [
        'library' => [
          'react/my_react2',
        ],
      ],
    ];
    return $build;
  }

}
