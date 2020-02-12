<?php

namespace Drupal\settings_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Form' block.
 *
 * @Block(
 *   id = "settings_form_custom_block",
 *   admin_label = @Translation("Settings form block"),
 *   category = @Translation("Settings form"),
 * )
 */
class FormBlock extends BlockBase implements BlockPluginInterface
{

  public function blockForm($form, FormStateInterface $form_state)
  {
    $form = parent::blockForm($form, $form_state);

    // Retrieve existing configuration for this block.
    $config = $this->getConfiguration();

    $form['form_block_text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Form block text'),
      '#default_value' => isset($config['form_block_text']) ? $config['form_block_text'] : '',
      '#description' => $this->t('Settings form module block text'),
    ];

    $form['form_block_link'] = [
      '#type' => 'url',
      '#title' => $this->t('Form block link'),
      '#default_value' => isset($config['form_block_link']) ? $config['form_block_link'] : '',
      '#description' => $this->t('Settings form module block link'),
    ];

    $form['form_block_html'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Form block html'),
      '#default_value' => isset($config['form_block_html']) ? $config['form_block_html'] : '',
      '#description' => $this->t('Settings form module block html'),
    ];

    return $form;
  }

  public function blockSubmit($form, FormStateInterface $form_state)
  {
    parent::blockSubmit($form, $form_state);

    $values = $form_state->getValues();

    $this->configuration['form_block_text'] = $values['form_block_text'];
    $this->configuration['form_block_link'] = $values['form_block_link'];
    $this->configuration['form_block_html'] = $values['form_block_html'];
  }
}
