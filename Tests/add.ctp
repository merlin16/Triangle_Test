
<h1>Test Requirements</h1>
<?php
    echo $this->Form->create('Test');
    echo $this->Form->input('test_id', array('type'=>'text', 'label' => 'Sample Request Number'));
    echo $this->Form->input('date');
    echo $this->Form->input('sample_code');
    echo $this->Form->input('product_name');
    echo $this->Form->input('total_panelist');
    echo $this->Form->end('Generate Triangle Test');
?>
