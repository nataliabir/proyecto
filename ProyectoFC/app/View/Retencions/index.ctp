<!-- File: /app/View/Retencions/index.ctp -->
<h1>Retencions</h1>
<table>
	<?php echo $this->Html->link('Agregar Retencion', array('controller' => 'retencions', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Canon Inst</th>
		<th>Monto</th>
		<th>Fondo Reserva</th>
		<th>Monto</th>
		<th>Ente Ejecutor</th>
		<th>Monto</th>
		<th>Proyecto</th>
		<th>Accion</th>
</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($retencions as $retencion): ?>
	<tr>
		<td><?php echo $retencion['Retencion']['id']; ?></td>
		<td> <?php echo $retencion['Retencion']['canon_inst']; ?> 	</td>
		<td> <?php echo $retencion['Retencion']['canon_inst_monto']; ?> </td>
		<td> <?php echo $retencion['Retencion']['fondo_reserva']; ?> 	</td>
		<td> <?php echo $retencion['Retencion']['fondo_reserva_monto']; ?> 	</td>
		<td> <?php echo $retencion['Retencion']['ente_ejecutor']; ?> 	</td>
        <td> <?php echo $retencion['Retencion']['ente_ejecutor_monto']; ?> 	</td>
        <td> <?php echo $retencion['Proyecto']['nombre']; ?> 	</td>

		
	
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $retencion['Retencion']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $retencion['Retencion']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($retencion); ?>
</table>
