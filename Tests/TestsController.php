<?php

//Still in change. Not finished yet
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
           $this->Test->create();
           if($this->Test->save($this->request->data))
            {   
                $this->redirect(array('action' => 'view'));
            } 
            else 
            {
                ///Comment
            } 
        }      
    }
    
    public function view()
    {
        $numbers = [];  
        
        //Generate table with Panelist Id, Same_1, Same_2 and Odd 
        //for the total panelists entered in the form
        
        //Need to do code for total Panelist
        for($i=0; $i<=5; $i++) // < total_panelist
        { 
            $array = [];
            $count = 0;
            while($count < 3) 
            {
                $random = rand(100, 999);
               
               //If number is already in array it will not be entered. (Avoid number repetition)
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

            //Add id, same_1, same_2 and odd to panelist table
             $this->Test->Panelist->save(
                  array(
                    'id' => ($i + 1),
                    'test_id' => 20, //test_id
                    'same_1' => $array[0],
                    'same_2' => $array[1],
                    'odd' => $array[2]
                  )   
              );                
          } 
      
          $data = $this->Test->Panelist->find('all');                                                                                         
          $this->set('panelists', $data);
    }
    
    
}

