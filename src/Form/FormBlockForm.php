<?php

namespace Drupal\your_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form that configures forms module settings.
 */
class SettingsBlockForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'settings_block_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();

    $form['form_block_text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Form block text'),
      '#default_value' => $config->get('Settings form module block text\''),
    ];

    $form['form_block_link'] = [
      '#type' => 'url',
      '#title' => $this->t('Form block link'),
      '#default_value' => $config->get('Settings form module block link\''),
    ];

    $form['form_block_html'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Form block html'),
      '#default_value' => $config->get('Settings form module block html\''),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }

}
