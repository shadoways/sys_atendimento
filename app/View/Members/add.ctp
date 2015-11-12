<h2>Novo Membro</h2>

<?php

    echo $this->Form->create('Member', array('action' => 'add'));
    echo $this->Form->input('name', array(
        'label' => 'Nome',
        'placeholder' => 'Nome',
        'required'
    ));
    echo $this->Form->input('email', array(
        'label' => 'Email',
        'placeholder' => 'Email',
        'required'
    ));
    echo $this->Form->input('phone', array(
        'label' => 'Telefone',
        'placeholder' => '(00)0000-0000',
        'required',
        'id' => 'phone'
    ));
    echo $this->Form->input('birth', array(
        'label' => 'Data de nascimento',
        'type' => 'text',
        'placeholder' => '00-00-0000',
        'required',
        'id' => 'date'
    ));
    echo $this->Form->end('Cadastrar');

?>
<?php
    $this->Html->script(array(
        'jquery.mask.min',
        'mask'
    ), array('block' => 'script'));
?>