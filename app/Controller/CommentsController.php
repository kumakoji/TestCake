<?php

class CommentsController extends AppController{
	public $helpers = array('Html','Form');

	
	public  function add(){
		if($this->request->is('post')){	
			echo "k";
			if($this->Comment->save($this->request->data)){
				$this->Session->setFlash("Success!");
				$this->redirect(array('controller'=>'posts','action='>'view',$this->data['Comment']['post_id']));
			}else{
				$this->Session->setFlash('faild!!');
			}
		}
	}
	public function show(){
		$this->Session->setFlash('faild!!');
	}
	/*
	public function delete($id){
		if($this->request->is('get')){
			throw new MethodNotAllowedException();
		}

		
		if($this->Post->delete($id)){
			$this->redirect(array('action'=>'index'));
		}else{
				$this->Session->setFlash('faild!');
		}
		
		
	}*/
}

?>