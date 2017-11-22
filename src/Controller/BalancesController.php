<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class BalancesController extends AppController{

  public function initialize(){
    parent::initialize();
  }

  public function index(){

    $users = TableRegistry::get('Users');

    $data = $users->find(
      'all',
      array(
        'conditions' => array('id' => '1'),
      )
    );

    $this->set(compact('data'));

  }
}
