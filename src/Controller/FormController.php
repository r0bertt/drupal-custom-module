<?php

namespace Drupal\settings_form\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class CustomController
 * @package Drupal\settings_form\Controller
 */
class FormController extends ControllerBase
{

  /**
   * Returns a render-able array for the page.
   */
  public function content()
  {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('My settings form page!'),
    ];
  }

}
