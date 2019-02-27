<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 20.12.18
 * Time: 21:42
 */

namespace Drupal\test_twig\Controller;


use Drupal\Core\Controller\ControllerBase;

class TestTwigController extends ControllerBase
{
    public function content() {

        return [
            '#theme' => 'my_template',
            '#test_var' => $this->t('Test Value'),

        ];

        /*
        return [
            '#type' => 'markup',
            '#markup' => '<p> Hallo </p>'
        ];
        */
    }
}