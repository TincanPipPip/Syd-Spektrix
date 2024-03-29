<?php

namespace Drupal\spektrix_import\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides the performances modal (book now link)
 */
class PerformancesCalendarModal extends ControllerBase {

  /**
   * Returns the performances modal (book now link).
   *
   * @return array
   *   A render array with the view content.
   */
  public function modalContent($prod_id) {
      
	$content = views_embed_view('whats_on', 'performances_modal', $prod_id);
		    
    return array (
      '#type' => 'markup',
      '#markup' => drupal_render($content),
      '#title' =>  $this->t('Select date'),
      '#attached' => array( 
		'library' => array( 
		  array('system', 'core/drupal.ajax', 'core/jquery'),
		), 
      ), 
    );    
  }
}