<!-- File: /app/View/ItemSubclasificacions/index.ctp -->
<h1>Director</h1>
<table>
	<?php echo $this->Html->link('Agregar Item', array('controller' => 'itemsubclasificacions', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $itemsubclasificacions array, printing out post info -->
	<?php foreach ($itemsubclasificacions as $itemsubclasificacion): ?>
	<tr>
		<td><?php echo $itemsubclasificacion['ItemSubclasificacion']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($itemsubclasificacion['ItemSubclasificacion']['nombre'], array('controller' => 'itemsubclasificacions', 'action' => 'view', $itemsubclasificacion['ItemSubclasificacion']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $itemsubclasificacion['ItemSubclasificacion']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $itemsubclasificacion['ItemSubclasificacion']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($itemsubclasificacion); ?>
</table>