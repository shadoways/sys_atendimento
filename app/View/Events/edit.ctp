<h2>Editar cadastro</h2>

<?php

    echo $this->Form->create('Member', array('action' => 'edit'));
    echo $this->Form->input('name');
    echo $this->Form->input('email');
    echo $this->Form->input('phone');
    echo $this->Form->input('birth');
    echo $this->Form->input('status');
    echo $this->Form->input('id', array('type' => 'hidden'));    
    echo $this->Form->end('Editar');

?>