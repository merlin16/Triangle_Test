class TestsController extends AppController{
     
    public $components = array('Session');
    
    public function index()
    {
        //Supervisor Login Page
    }
    
    public function add()
    {
        if($this->request->is('post'))
        {
            $this->Test->create();
            if($this->Test->save($this->request->data))
            {   
                //$this->redirect('');
            } 
            else 
            {
                ///Coment
            }  
        }
        
    }
  }  
