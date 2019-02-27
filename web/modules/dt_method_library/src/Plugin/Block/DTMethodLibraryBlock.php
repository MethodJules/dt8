<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 25.02.19
 * Time: 19:49
 */

namespace Drupal\dt_method_library\Plugin\Block;


use Drupal\Core\Block\BlockBase;

/**
 * Class DTMethodLibraryBlock
 *
 * @package Drupal\dt_method_library\Plugin\Block
 * @Block (
 *   id = "dt_method_library_block",
 *   admin_label = @Translation("DT Method Library Block")
 * )
 */
class DTMethodLibraryBlock extends BlockBase {

  public function build() {
    $html = [
      '#type' => 'item',
      '#title' => $this->t('Methods'),
      '#description' => $this->t('Shows you the methods'),
    ];

    return $html;
  }
}