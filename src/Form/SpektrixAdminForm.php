<?php

/**
 * @file
 * Admin form for Spektrix integration
 */

namespace Drupal\spektrix_import\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class SpektrixAdminForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
	return 'spektrix_import_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
	return [
	  'spektrix_import.settings',
	];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
	$config = $this->config('spektrix_import.settings');

	$form['#tree'] = TRUE;
	
	$form['spektrix_import_client'] = array(
	  '#type' => 'textfield',
	  '#title' => $this->t('Spektrix username'),
	  '#default_value' => $config->get('spektrix_import_client'),
	);

	return parent::buildForm($form, $form_state);
  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
	$config = \Drupal::service('config.factory')->getEditable('spektrix_import.settings');
	$config->set('spektrix_import_client', $form_state->getValue('spektrix_import_client'));
	
	$config->save();

	parent::submitForm($form, $form_state);
  }
}
