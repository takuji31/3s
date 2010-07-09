<?php
class SlidesController extends AppController {

	public $name = 'Slides';
    public $helpers = array('Html','Form','Javascript','Senchan.Hatena');
    public $uses = array('Study','Slide');
    public $paginate = array(
            'limit' => 1,
            'order' => array(
                'Slide.page' => 'asc'
            )
        );

    public function show($study_rid=null){
        $this->layout = false;

        $study_id = $this->Study->field('id',array('Study.rid'=>$study_rid));
        $data = $this->paginate('Slide',array('Slide.study_id'=>$study_id));
        //データなかったらリダイレクト
        if(!$study_id || !$data){
            $this->redirect('/');
        }
        $this->set('study',$data[0]['Study']);
        $this->set('slide',$data[0]['Slide']);
    }

    public function add($study_rid=null){


        if($this->data){
            $study_rid = $this->Study->field('rid',array('Study.id'=>$this->data['Slide']['study_id']));
            $this->Session->setFlash(
                $this->Slide->save($this->data) ? 
                '追加しました':
                '追加できませんでした'
            );
            $this->redirect('/studies/show/'.$study_rid);
        }else{
            $study_id = $this->Study->field('id',array('Study.rid'=>$study_rid));
            $this->set('study_id',$study_id);
        }

    }
    public function edit($slide_rid=null){


        if($this->data){
            $study_rid = $this->Study->field('rid',array('Study.id'=>$this->data['Slide']['study_id']));
            $this->Session->setFlash(
                $this->Slide->save($this->data) ? 
                '更新しました':
                '更新できませんでした'
            );
            $this->redirect('/studies/show/'.$study_rid);
        }else{
            $slide = $this->Slide->findByRid($slide_rid);
            $this->data = $slide;
        }

    }

}
?>
