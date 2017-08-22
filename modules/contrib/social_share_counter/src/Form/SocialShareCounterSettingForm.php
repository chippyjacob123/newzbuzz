<?php

/**
 * @file
 * Contains \Drupal\social_share_counter\Form\SocialShareCounterSettingForm.
 */

namespace Drupal\social_share_counter\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a settings for SocialShareCounter module.
 */
class SocialShareCounterSettingForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  public function getEditableConfigNames() {
    return ['social_share_counter.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'social_share_counter_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Load module's configuration.
    $config = $this->config('social_share_counter.settings');

    $form['general_setting'] = array(
      '#type' => 'fieldset',
      '#title' => t('General Setting'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    );
    $form['general_setting']['ssc_status'] = array(
      '#type' => 'radios',
      '#title' => t('Display Butons'),
      '#options' => array(1 => 'Enable', 2 => 'Disable'),
      '#default_value' => $config->get('ssc_status'),
    );
    $form['general_setting']['ssc_text_below_count'] = array(
      '#type' => 'textfield',
      '#title' => t('Text below Count'),
      '#default_value' => $config->get('ssc_text_below_count'),
      '#size' => 26,
    );
    $form['general_setting']['ssc_min_to_show'] = array(
      '#type' => 'textfield',
      '#title' => t('Minimum Count to Show (Default is Zero)'),
      '#default_value' => $config->get('ssc_min_to_show'),
      '#size' => 26,
    );
    $form['ssc_buttons'] = array(
      '#type' => 'fieldset',
      '#title' => t('Button Options'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    );
    $form['ssc_buttons']['ssc_facebook_button_text'] = array(
      '#type' => 'textfield',
      '#title' => t('Facebook'),
      '#default_value' => $config->get('ssc_facebook_button_text'),
      '#size' => 26,
    );
    $form['ssc_buttons']['ssc_facebook_twitter_text'] = array(
      '#type' => 'textfield',
      '#title' => t('Twitter'),
      '#default_value' => $config->get('ssc_facebook_twitter_text'),
      '#size' => 26,
    );

    return parent::buildForm($form, $form_state);
  }

/**
   * {@inheritdoc}
   */

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('social_share_counter.settings')
      ->set('ssc_status', $values['ssc_status'])
      ->set('ssc_text_below_count', $values['ssc_text_below_count'])
      ->set('ssc_min_to_show', $values['ssc_min_to_show'])
      ->set('ssc_facebook_button_text', $values['ssc_facebook_button_text'])
      ->set('ssc_facebook_twitter_text', $values['ssc_facebook_twitter_text'])
      ->save();

    parent::submitForm($form, $form_state);
  }

}
