<?php

namespace Drupal\settings_form\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * The form controller.
 */
class FormController extends ControllerBase
{

  /**
   * Returns a render-able array for the page.
   */
  public function content()
  {
    $build = [
      '#type' => 'markup',
      '#markup' => $this->t('My settings form page!'),
    ];
    return $build;
  }

}
