<?php
/**
 * @file
 * Contains \Drupal\likes\Plugin\Block
 */
namespace Drupal\likes\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'likes' block.
 *
 * @Block(
 *   id = "news_likes_block",
 *   admin_label = @Translation("Likes block"),
 *   category = @Translation("Custom Likes block example")
 * )
 */

class NewsLikesBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\likes\Form\LikesForm');
    return $form;

  }
}
