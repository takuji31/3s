<?php
class UsersController extends AppController {

	public $name = 'Users';
    public $components = array('Auth');

    public function beforeFilter(){
        $this->Auth->allow('add');
    }
    
    public function index(){
        $this->redirect('/');
    }

    public function login(){

    }
    public function logout(){
        $this->Auth->logout();
    }

    public function add(){
        $data = &$this->data;
        if(!empty($data)){
            $this->Session->setFlash(
                $this->User->save($this->data)?
                '追加しました。管理者が承認するまでお待ちください。':
                '追加できませんでした'
            );
            $this->redirect('/');
        }
    }

}
?>
