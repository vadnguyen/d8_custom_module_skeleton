<?php 
namespace Drupal\dicustom\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class DiCustomController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function dipage() {
    $element = array(
      '#markup' => 'Hello, world',
    );
    return $element;
  }

}