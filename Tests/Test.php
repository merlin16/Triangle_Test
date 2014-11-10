<?php

class Test extends AppModel{ 

    //Relates tests table with panelists table
    public $hasMany = array(
        'Panelist' => array(
            'className'=>'Panelist',
            'foreingKey'=>'test_id'
        )
    );
}
