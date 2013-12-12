<!-- File: /app/View/Etapas/index.ctp -->
<h1>Etapas</h1>
<table>
	<?php echo $this->Html->link('Agregar Etapa', array('controller' => 'etapas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Plan</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $etapas array, printing out post info -->
	<?php foreach ($etapas as $etapa): ?>
	<tr>
		<td><?php echo $etapa['Etapa']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($etapa['Etapa']['codigo'], array('controller' => 'etapas', 'action' => 'view', $etapa['Etapa']['id'])); ?>
		</td>
		<td><?php echo $etapa['Etapa']['nombre']; ?></td>
		
		<td><?php echo $etapa['Plan']['nombre']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $etapa['Etapa']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $etapa['Etapa']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($etapa); ?>
</table