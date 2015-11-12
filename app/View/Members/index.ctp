<table  id="dataTable">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Data Nascimento</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($cadastro as $cadastro): ?>
            <?php 
                $dateTimeZone = new DateTimeZone('America/New_York');
                $date = new DateTime($cadastro['Member']['birth'], $dateTimeZone);
            ?>
            <tr>	

                <td><?php echo $cadastro['Member']['name']; ?></td>
                <td><?php echo $cadastro['Member']['phone']; ?></td>
                <td><?php echo $cadastro['Member']['email']; ?></td>
                <td><?php echo $date->format('d-m-Y');?></td>
                <td><?php echo $cadastro['Member']['status'];?></td>
                <td>
                    <?php echo $this->Html->link('Editar', array('action' => 'edit', $cadastro['Member']['id']));?>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>        
	                
</table>

<br/>

<?php echo $this->Html->link('Novo membro', array('action' => 'add'));?>

<?php
    echo $this->Html->script(
       'dataTable',
        array('block' => 'script')
    );
?>