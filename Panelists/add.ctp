
<h1>agregar panelist</h1>

<?php
 
  echo $this->Form->create('Panelist');
  echo $this->Form->input('test_id', array('label'=>'Sample request number'));
  echo $this->Form ->input('id', array('type'=>'text', 'label'=>'Panelist number'));
  echo $this->Form->end('Send');

?>
