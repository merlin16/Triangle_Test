<?php

class Test extends AppModel{ 

    //Relate tests table with panelists table
    public $hasMany = array(
        'Panelist' => array(
            'className'=>'Panelist',
            'foreingKey'=>'test_id'
        )
    );
}
