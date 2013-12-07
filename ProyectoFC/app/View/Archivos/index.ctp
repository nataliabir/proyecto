<!-- File: /app/View/Archivos/index.ctp -->
<h1>Archivo</h1>
<table>
	<?php echo $this->Html->link('Agregar Archivo', array('controller' => 'archivos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
	    <th>Ruta</th>
	    <th>Tipo</th>
		<th>Proyecto</th>
		<th>Accion</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($archivos as $archivo): ?>
	<tr>
		<td><?php echo $archivo['Archivo']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($archivo['Archivo']['nombre'], array('controller' => 'archivos', 'action' => 'view', $archivo['Archivo']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($archivo['Archivo']['ruta'], array('controller' => 'archivos', 'action' => 'view', $archivo['Archivo']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($archivo['Archivo']['tipo'], array('controller' => 'archivos', 'action' => 'view', $archivo['Archivo']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($archivo['Proyecto']['nombre'], array('controller' => 'archivos', 'action' => 'view', $archivo['Archivo']['id'])); ?>
		</td>
		<td>
		
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $archivo['Archivo']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $archivo['Archivo']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($archivo); ?>
</table>