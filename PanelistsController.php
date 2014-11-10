<?php


class PanelistsController extends AppController{
	
	public $helpers = array('HTML', 'Form');
	public $components = array('Session');
	
	
	public function index(){
		
		$this->set('Panelist', $this->Panelist -> findbyId(data));
		
	}
	
	public function add(){
		
		if($this->request ->is('post')){
			if($this->Panelist->save($this->request->data)){
				$this->redirect(array('index','data'));
				
			}
			
		}
			
	}
	
	
}
