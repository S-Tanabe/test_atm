<?php
namespace App\Controller;

use App\Controller\AppController;

class PaymentsController extends AppController{

  public function index(){

  }

  public function confirm(){
    var_dump($this->request['data']['money']);
  }

  public function complete(){

  }

}
