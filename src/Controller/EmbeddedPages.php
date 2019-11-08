<?php

/*
 * Provides controller callbacks for embedded iframe pages
 */

namespace Drupal\spektrix_import\Controller;

use Drupal\Core\Controller\ControllerBase;

class EmbeddedPages extends ControllerBase {

  private $spektrix_user;
  
  public function __construct() {
    $config = \Drupal::service('config.factory')->get('spektrix_import.settings');
    $user = $config->get('spektrix_import_client');
    
    $this->spektrix_user = $user;
  }
  
  // Book now
  public function book($perf_id) {
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/ChooseSeats.aspx?resize=true&EventInstanceId=' . $perf_id,
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  public function basket() {
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/Basket2.aspx?resize=true',
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  public function account() {
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/secure/MyAccount.aspx?resize=true',
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  public function memberships() {
    
    if (isset($_GET['type'])) {
      $type_selector = '&Attribute_Membership Type=' . $_GET['type'];
    }
    
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/Memberships.aspx?resize=true' . $type_selector,
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  public function gift_vouchers() {
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/GiftVouchers.aspx?resize=true',
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  public function login() {
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/secure/LoginLogout.aspx?resize=true',
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  public function logout() {
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/secure/LoginLogout.aspx?resize=true',
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  public function register() {
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/secure/signup.aspx?resize=true',
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  public function checkout() {
    return [
        '#type' => 'html_tag',
        '#tag' => 'iframe',
        '#attributes' => [
            'style' => 'width:100%;',
            'src' => 'https://system.spektrix.com/'. $this->spektrix_user .'/website/secure/checkout.aspx?resize=true',
            'frameborder' => 0,
            'onload' => 'setTimeout(function(){window.scrollTo(0,0);}, 100)',
            'name' => 'SpektrixIFrame',
            'id' => 'SpektrixIFrame'
        ],
        '#prefix' => '<div class="grid m-no-banner"><div class="col-sm-12"><div class="m-entity m-entity__spektrix">',
        '#suffix' => '</div></div></div>'
    ];
  }
  
  

}
