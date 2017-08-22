<?php

namespace Drupal\likes\Controller;

use Drupal\Core\Controller\ControllerBase;

class LikesController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {

    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
      '#markup' => $user->uid,
    );
  }

}
