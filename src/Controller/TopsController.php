<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class TopsController extends AppController{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // ユーザーの登録とログアウトを許可します。
        // allow のリストに "login" アクションを追加しないでください。
        // そうすると AuthComponent の正常な機能に問題が発生します。
        $this->Auth->allow(['logout']);
    }

  public function initialize(){
    parent::initialize();
  }


  //ログイン画面表示
  public function login(){
    // if ($this->request->is('post')) {
    //     $user = $this->Auth->identify();
    //     if ($user) {
    //         $this->Auth->setUser($user);
    //         return $this->redirect(['controller' => 'Tops', 'action' => 'login']);
    //         // return $this->redirect($this->Auth->redirectUrl());
    //     } else {
    //         return $this->redirect(['controller' => 'Tops', 'action' => 'login']);          
    //     }
    //     $this->Flash->error(__('Invalid username or password, try again'));
    // }
  }

  public function logout() {
    return $this->redirect($this->Auth->logout());
  }

  //メニュー表示
  public function index(){
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect(['controller' => 'Tops', 'action' => 'index']);
            // return $this->redirect($this->Auth->redirectUrl());
        } else {
            return $this->redirect(['controller' => 'Tops', 'action' => 'login']);          
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }

  }
}
