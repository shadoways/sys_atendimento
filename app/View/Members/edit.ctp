<h2>Editar cadastro</h2>

<?php

    echo $this->Form->create('Member', array('action' => 'edit'));
    echo $this->Form->input('name', array('label' => 'Nome'));
    echo $this->Form->input('email', array('label' => 'Email'));
    echo $this->Form->input('phone', array(
        'label' => 'Telefone',
        'id' => 'phone',
        'placeholder' => '(00)0000-0000'
    ));
    echo $this->Form->input('birth', array(
        'label' => 'Data de nascimento',
        'type' => 'text', 'id' => 'date',
        'placeholder' => '00-00-0000'
    ));
    echo $this->Form->input('status');
    echo $this->Form->input('id', array('type' => 'hidden'));    
    echo $this->Form->end('Editar');

?>

<?php
    $this->Html->script(array(
        'jquery.mask.min',
        'mask'
    ), array('block' => 'script'));
?>