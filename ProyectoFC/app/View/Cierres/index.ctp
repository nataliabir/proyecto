<!-- File: /app/View/Cierres/index.ctp -->
<h1>Cierre</h1>
<table>
	<?php echo $this->Html->link('Agregar Cierre', array('controller' => 'cierres', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Observaciones</th>
		<th>Fecha de Reporte</th>
		<th>Proyecto_id</th>
		<th>Motivo Cierre</th>
		<th>Accion</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($cierres as $cierre): ?>
	<tr>
		<td><?php echo $cierre['Cierre']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($cierre['Cierre']['observaciones'], array('controller' => 'cierres', 'action' => 'view', $cierre['Cierre']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($cierre['Cierre']['fecha_reporte'], array('controller' => 'cierres', 'action' => 'view', $cierre['Cierre']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($cierre['Proyecto']['nombre'], array('controller' => 'cierres', 'action' => 'view', $cierre['Cierre']['id'])); ?>
		</td>
        <td>
		<?php echo $this->Html->link($cierre['MotivoCierre']['nombre'], array('controller' => 'cierres', 'action' => 'view', $cierre['Cierre']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $cierre['Cierre']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $cierre['Cierre']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($cierre); ?>
</table>