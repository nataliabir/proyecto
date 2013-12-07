<!-- File: /app/View/Grupos/index.ctp -->
<h1>Grupo</h1>
<table>
	<?php echo $this->Html->link('Agregar Grupo', array('controller' => 'grupos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Departamento</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $grupos array, printing out post info -->
	<?php foreach ($grupos as $grupo): ?>
	<tr>
		<td><?php echo $grupo['Grupo']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($grupo['Grupo']['nombre'], array('controller' => 'grupos', 'action' => 'view', $grupo['Grupo']['id'])); ?>
		</td>
		<td><?php echo $grupo['Departamento']['nombre']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $grupo['Grupo']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $grupo['Grupo']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($grupo); ?>
</table>