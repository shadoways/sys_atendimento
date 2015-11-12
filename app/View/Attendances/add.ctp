<h2>Novo Atendimento</h2>

<?php
    echo $this->Form->create('Attendance', array('action' => 'add'));
?>
<select name="data[Member][id]">
    <option value='#' selected>Selecione um nome</option>
    <?php foreach($memberData as $member):?>        
        <option value='<?php echo $member['Member']['id']?>'><?php echo $member['Member']['name'];?></option>
    <?php endforeach;?>
</select>
<?php
    echo $this->Form->input('date', array(
        'label' => 'Data',
        'type' => 'text',
        'placeholder' => '00-00-0000',
        'required',
        'id' => 'date'
    ));
    echo $this->Form->input('hour', array(
        'label' => 'Hora',
        'type' => 'text',
        'id' => 'time',
        'placeholder' => '00:00',
        'required'
    ));
    echo $this->Form->end('Marcar atendimento');

?>

<?php
    $this->Html->script(array(
        'jquery.mask.min',
        'mask'
    ), array('block' => 'script'));
?>
