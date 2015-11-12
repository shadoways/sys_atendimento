<table id="dataTable">
    
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>       
    </thead>
    
    <tbody>    
        <?php foreach($attendance as $attendance): ?>
            <?php 
                $dateTimeZone = new DateTimeZone('America/New_York');
                $date = new DateTime($attendance['Attendance']['date'], $dateTimeZone);
                $time = new DateTime($attendance['Attendance']['hour'], $dateTimeZone);
            ?>
            <tr>

                <td><?php echo $attendance['Attendance']['name']; ?></td>
                <td><?php echo $date->format('d-m-Y');?></td>
                <td><?php echo $time->format('H:i');?></td>
                <td><?php echo $attendance['Attendance']['status'];?></td>
                <td>
                     <?php echo $this->Html->link('Editar', array('action' => 'edit', $attendance['Attendance']['id']));?>
                    | <?php echo $this->Html->link('Cancelar', array('action' => 'cancel', $attendance['Attendance']['id']));?>
                </td>

            </tr>

        <?php endforeach; ?>
    </tbody>	                
</table>

<br/>

<?php echo $this->Html->link('Novo atendimento', array('action' => 'add')); ?>

<?php
    echo $this->Html->script(
       'dataTable',
        array('block' => 'script')
    );
?>