Triangle_Test
=============

PHP project
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
