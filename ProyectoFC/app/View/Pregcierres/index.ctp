<!-- File: /app/View/PregsCierres/index.ctp -->
<h1>PregsCierres</h1>
<table>
	<?php echo $this->Html->link('Agregar Pregcierre', array('controller' => 'pregcierres', 'action' => 'add')); ?>
		<tr>
		<th>Id</th>
		<th>SINO</th>
		<th>Causa</th>
		<th>Ponderacion</th>
		<th>Cierre</th>
        <th>Pregunta</th>
		<th>Acciones</th>
	</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($pregcierres as $pregcierre): ?>
	<tr>
		<td><?php echo $pregcierre['Pregcierre']['id']; ?>
		</td> 
		<td><?php echo $this->Html->link($pregcierre['Pregcierre']['sino'], array('controller' => 'pregcierres', 'action' => 'view', $pregcierre['Pregcierre']['id'])); ?>
		</td>
		<td><?php echo $pregcierre['Pregcierre']['causa']; ?> </td>
		<td><?php echo $pregcierre['Pregcierre']['ponderacion']; ?> </td>
		<td><?php echo $pregcierre['Cierre']['observaciones']; ?> 		</td>
        <td><?php echo $pregcierre['Pregunta']['nombre']; ?>       </td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $pregcierre['Pregcierre']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $pregcierre['Pregcierre']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($pregcierre); ?>
</table>
