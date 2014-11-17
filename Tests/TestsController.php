<?php

<?php

class TestsController extends AppController{
    
    public $helpers = array('Html', 'Form'); 
    public $components = array('Session');
    
    public function index()
    {
      
    }
    
    public function add()
    {
        if($this->request->is('post'))
        {    
            $testId = $this->request->data['Test']['id'];
            
            if(!$this->__validateId($testId))
            {
                $this->Test->create();

                if($this->Test->save($this->request->data))
                {   
                    $this->Session->setFlash(__("Test requirements have been saved!"));

                    $totalPanelists = $this->request->data['Test']['total_panelist'];
                    $this->__addPanelistData($testId, $totalPanelists);

                    $this->redirect(array("action" => "viewPanelistInfo", "?" => array("testId" => $testId)));
                } 
                else 
                {
                    $this->Session->setFlash(__("Test requirements have not been saved!"));
                }          
             }   
        }       
    }
    public function login()
    {
        
    }
    
    public function __validateId($testId)
    {
        $conditions = array('id' =>$testId);
        
        if ($this->Test->hasAny($conditions))
        {
            $this->Session->setFlash(__("Sample Request Number " . $testId ." already exists"));
            $this->redirect(array("action" => "add"));            
        }
    }
        
    public function viewPanelistInfo()
    {        
        $testId = $this->params['url']['testId'];
                      
       $data = $this->Test->Panelist->find('all', array ('fields' => array('test_id', 'panelist_id', 'same_1', 'same_2', 'odd'), 
                                                         'conditions' => array('test_id' => $testId)));       
       $this->set('tests', $data);       
    }
    
    public function __addPanelistData($id, $totalPanelists)
    {  
                
        $numbers = [];
        
        // Generate random numbers for total panelist
        for($i=1; $i<=$totalPanelists; $i++)
        { 
            $array = [];
            $count = 0;

            while($count < 3) 
            {
                $random = rand(100, 999);

                if(!in_array($random, $array) && !in_array($random, $numbers))
                {
                    $array[] = $random;
                    $count++;
                }
            }

            for($j=0; $j<3; $j++)
            {
                $numbers[] = $array[$j];
            }         
            
          // Save data for each panelist
           $this->Test->Panelist->save(
                  array(
                    'test_id' => $id,
                    'panelist_id' => $i,
                    'same_1' => $array[0],
                    'same_2' => $array[1],
                    'odd' => $array[2]
                  )   
                );
          }
    } 
}



