<!-- File: /app/View/actividads/index.ctp -->
<h1>Actividad</h1>
<table>
	<?php echo $this->Html->link('Agregar Actividad', array('controller' => 'actividads', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Prog Entregable</th>
		<th>Mes Inicio</th>
		<th>Mes Fin</th>
		<th>Hitos</th>
		<th>Etapa</th>
		<th>Accion </th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($actividads as $actividad): ?>
	<tr>
		<td><?php echo $actividad['Actividad']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($actividad['Actividad']['nombre'], array('controller' => 'actividads', 'action' => 'view', $actividad['Actividad']['id'])); ?>
		</td>
		
		<td>
		<?php echo $this->Html->link($actividad['Actividad']['prod_entregable'], array('controller' => 'actividads', 'action' => 'view', $actividad['Actividad']['id'])); ?>
		</td>
		
		<td>
		<?php echo $this->Html->link($actividad['Actividad']['mes_ini'], array('controller' => 'actividads', 'action' => 'view', $actividad['Actividad']['id'])); ?>
		</td>
		
		<td>
		<?php echo $this->Html->link($actividad['Actividad']['mes_fin'], array('controller' => 'actividads', 'action' => 'view', $actividad['Actividad']['id'])); ?>
		</td>
		
		<td>
		<?php echo $this->Html->link($actividad['Actividad']['hitos'], array('controller' => 'actividads', 'action' => 'view', $actividad['Actividad']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($actividad['Etapa']['nombre'], array('controller' => 'actividads', 'action' => 'view', $actividad['Actividad']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $actividad['Actividad']['id']),
                array('confirm' => 'Esta seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $actividad['Actividad']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($actividad); ?>
</table>