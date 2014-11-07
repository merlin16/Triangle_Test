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
	
	 public function edit()
    	{
	        $same_1 = rand(100, 999);
	        $same_2 = rand(100, 999);
	        $odd = rand(100, 999);
	        
	        if(empty($this->data)) 
	        { 
	            $this->Panelist->save(
	                 array(
	                   'same_1' => $same_1,
	                   'same_2' => $same_2,
	                   'odd' => $odd             
	                 )   
	             ); 
	        } 
        
	        $data = $this->Panelist->find('all');
	        $this->set('panelists', $data);
    	}
}
