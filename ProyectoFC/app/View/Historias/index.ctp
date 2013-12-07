<!-- File: /app/View/Historias/index.ctp -->
<h1>Historia</h1>
<table>
	<?php echo $this->Html->link('Agregar Historia', array('controller' => 'historias', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Proyecto</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $historias array, printing out post info -->
	<?php foreach ($historias as $historia): ?>
	<tr>
		<td><?php echo $historia['Historia']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($historia['Historia']['nombre'], array('controller' => 'historias', 'action' => 'view', $historia['Historia']['id'])); ?>
		</td>
		<td><?php echo $historia['Historia']['descripcion']; ?></td>
		<td><?php echo $historia['Proyecto']['nombre']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $historia['Historia']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $historia['Historia']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($historia); ?>
</table>