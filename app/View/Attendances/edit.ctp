<h2>Editar atendimento</h2>

<?php

    echo $this->Form->create('Attendance', array('action' => 'edit'));
    echo $this->Form->input('name', array(
        'id' => 'tags',
        'label' => 'Nome'
    ));
    echo $this->Form->input('date', array(
        'type' => 'text', 
        'id' => 'date', 
        'label' => 'Data',
        'placeholder' => '00-00-0000'
    ));
    echo $this->Form->input('hour', array(
        'type' => 'text', 
        'id' => 'time', 
        'label' => 'Hora',
        'placeholder' => '00:00'
    ));
    echo $this->Form->input('status', array('label' => 'Nome'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Editar');

?>

<?php
    $this->Html->script(array(
        'jquery.mask.min',
        'mask'
    ), array('block' => 'script'));
?>