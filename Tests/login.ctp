
<?php

  echo $this->Form->create('Test');
  echo $this->Form->input('username');
  echo $this->Form ->input('password');
  echo $this->Form ->input('confirm password');
  echo $this->Form->end('Login');
