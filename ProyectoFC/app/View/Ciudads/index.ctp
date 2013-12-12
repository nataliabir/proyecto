<!-- File: /app/View/Ciudas/index.ctp -->
<h1>Ciudad</h1>
<table>
	<?php echo $this->Html->link('Agregar Ciudad', array('controller' => 'ciudads', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>CP</th>
		<th>Provincia_id</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($ciudads as $ciudad): ?>
	<tr>
		<td><?php echo $ciudad['Ciudad']['id']; ?></td>
		<td> <?php echo $this->Html->link($ciudad['Ciudad']['nombre'], array('controller' => 'ciudads', 'action' => 'view', $ciudad['Ciudad']['id'])); ?>
		</td>
		<td> <?php echo $ciudad['Ciudad']['cp']; ?> </td>
		<td> <?php echo $ciudad['Provincia']['nombre']; ?> 	</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $ciudad['Ciudad']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $ciudad['Ciudad']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($ciudad); ?>
</table>