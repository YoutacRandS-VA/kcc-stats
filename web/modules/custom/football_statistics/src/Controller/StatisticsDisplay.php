<?php
  //This class is called in football_statistics.routing.yml
  namespace Drupal\football_statiscs\Controller; //This refers to a class created directory
  use Drupal\Core\Controller\ControllerBase; //This refers to an already existing package

  class StatisticsDisplay extends ControllerBase {
    public function view(){
      return [
        '#type' => 'markup',
        '#markup' => $this->t('this is going to list athlete statistics.')
      ];
    }
  }

