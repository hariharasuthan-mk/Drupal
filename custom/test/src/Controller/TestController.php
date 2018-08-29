<?php
/**
 * @file
 * Contains \Drupal\test\Controller\TestController.
 */
 
namespace Drupal\test\Controller;
 
/**
 * TestController.
 */
class TestController {
  /**
   * Generates an test page.
   */
  public function test() {
    return array(
      '#markup' => t('Hello World!'),
    );
  }      
}
