<?php

// connect to the table panelists in the database triangle_test.

class Panelist extends AppModel{
  
  public $belongsto = array(
                    'Test' => array(
                        'className' => 'Test',
                        'foreingKey' => 'test_id'
                    )
    );  
}
