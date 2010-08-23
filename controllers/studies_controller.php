<?php
class StudiesController extends AppController {

	public $name = 'Studies';
    public $helpers = array('Html','Form','Javascript','Text','Session');
    public $components = array('Auth');

    public function beforeFilter(){
        //ログイン不要ページの設定
        $this->Auth->allow('index','show');

    }


    public function index(){
        $studies = $this->Study->find('all',array(
            'order'=>'Study.date desc,Study.id desc'
        )) or array();
        $this->set('title_for_layout','Top');
        $this->set('studies',$studies);
    }
    public function my(){
        $studies = $this->Study->find('all',array(
            'order'=>'Study.date desc,Study.id desc',
            'conditions'=>array(
                'Study.user_id'=>$this->Auth->user('id')
            )
        )) or array();
        $this->set('title_for_layout','MyPage');
        $this->set('studies',$studies);
    }
    public function add(){

        $data = &$this->data;

        if(!empty($data)){
            $this->data['Study']['user_id'] = $this->Auth->user('id');
            $this->Session->setFlash(
                    $this->Study->save($data) ?
                    '追加しました' :
                    '追加できませんでした'
                );
            $this->redirect('/my/');
        }
    }
    public function edit($rid = null){

        $data = &$this->data;

        if(!empty($data)){
            $this->Session->setFlash(
                    $this->Study->save($data) ?
                    '更新しました' :
                    '更新できませんでした'
                );
            $this->redirect('/my/');
        }else{
            $study = $this->Study->findByRid($rid);
            $this->data = $study;
        }
    }
    public function delete($rid = null){

        $study = $this->Study->findByRid($rid);
        $id = $study['Study']['id'];

        if(!empty($id)){
            $this->Session->setFlash(
                    $this->Study->delete($id) ?
                    '削除しました' :
                    '削除できませんでした'
                );
        }
        $this->redirect('/my/');
    }

    public function show($study_rid){
        $data = $this->Study->findByRid($study_rid);
        $this->set('study',$data['Study']);
        $this->set('slides',$data['Slide']);

    }

}
?>
