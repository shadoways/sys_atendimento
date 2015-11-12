<h2>Novo Evento</h2>

<?php

    echo $this->Form->create('Event', array('action' => 'add'));
    echo $this->Form->input('title', array(
        'placeholder' => 'Título',
        'required'
    ));
    echo $this->Form->input('date', array(
        'type' => 'text',
        'placeholder' => '00/00/0000',
        'required',
        'id' => 'date'
    ));
    echo $this->Form->input('time', array(
        'type' => 'text',
        'placeholder' => '00:00',
        'required',
        'id' => 'time'
    ));
    echo $this->Form->input('location', array(
        'placeholder' => 'Local',
        'required',
    ));
    echo $this->Form->input('description', array(
        'placeholder' => 'Descrição',
        'required',
    ));    

    echo $this->Form->end('Cadastrar');

?>
<?php
    $this->Html->script(array(
        'jquery.mask.min',
        'mask'
    ), array('block' => 'script'));
?>