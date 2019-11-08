<?php

/* 
 * Provides a controller that returns a booking iFrame
 */

namespace Drupal\spektrix_import\Controller;

use Drupal\Core\Controller\ControllerBase;

class Booking extends ControllerBase {

	private $spektrix_user;
  
  public function __construct() {
    $config = \Drupal::service('config.factory')->get('spektrix_import.settings');
    $user = $config->get('spektrix_import_client');
    
    $this->spektrix_user = $user;
  }
	
	public function Iframe($perf_id) {	  
	  return [
		'#type'	=>	'html_tag',		
		'#tag'	=>	'iframe',
		'#attributes' =>  [
		  'style' => 'width:100%;',
		  'src'	=>	'https://system.spektrix.com/'. $this->spektrix_user .'/website/ChooseSeats.aspx?resize=true&EventInstanceId='. $perf_id,
		  'frameborder'	=>	0,
		  'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
		  'name' => 'SpektrixIFrame',
		  'id' => 'SpektrixIFrame'
		],
		'#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
    '#suffix' => '</div></div></div>'
	  ];		
	}
}
