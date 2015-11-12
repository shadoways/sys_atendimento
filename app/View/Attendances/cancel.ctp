<h2>Cancelar atendimento</h2>
<?php
    echo $this->Form->create('Attendance', array('action' => 'cancel'));
    echo $this->Form->textarea('justification', array(
    'placeholder' => 'Justificativa'
    ));
    echo $this->Form->end('Cancelar');
?>