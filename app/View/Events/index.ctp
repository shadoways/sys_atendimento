<table  id="dataTable">
    <thead>
        <tr>
            <th>Título</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Local</th>
            <th>Descrição</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($event as $event): ?>

            <tr>	

                <td><?php echo $event['Event']['title']; ?></td>
                <td><?php echo $event['Event']['date']; ?></td>
                <td><?php echo $event['Event']['time']; ?></td>
                <td><?php echo $event['Event']['location'];?></td>
                <td><?php echo $event['Event']['description'];?></td>
                <td>
                    <?php echo $this->Html->link('Editar', array('action' => 'edit', $event['Event']['id']));?>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>        
	                
</table>

<br/>

<?php echo $this->Html->link('Novo evento', array('action' => 'add'));?>

<?php
    echo $this->Html->script(
       'dataTable',
        array('block' => 'script')
    );
?>