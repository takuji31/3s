<?php
class StudiesController extends AppController {

	public $name = 'Studies';
    public $helpers = array('Html','Form','Javascript','Text');


    public function index(){
        $studies = $this->Study->find('all',array('order'=>'Study.date desc,Study.id desc')) or array();
        $this->set('title_for_layout','Top');
        $this->set('studies',$studies);

    }
    public function add(){

        $data = &$this->data;

        if($data){
            $this->Session->setFlash(
                    $this->Study->save($data) ?
                    '追加しました' :
                    '追加できませんでした'
                );
            $this->redirect('/');
        }
    }

    public function show($study_rid){
        $data = $this->Study->findByRid($study_rid);
        $this->set('study',$data['Study']);
        $this->set('slides',$data['Slide']);

    }

}
?>
