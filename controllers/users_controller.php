<?php
class UsersController extends AppController {

	public $name = 'Users';
    public $uses = array();
    public $components = array('Auth');
    
    public function index(){
        $this->redirect('/');
    }

    public function login(){

    }
    public function logout(){
        $this->Auth->logout();
    }

}
?>
