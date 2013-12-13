<!-- File: /app/View/PregCierres/index.ctp -->
<h1>PregCierres</h1>
<table>
	<?php echo $this->Html->link('Agregar PregCierre', array('controller' => 'pregcierres', 'action' => 'add')); ?>
		<tr>
		<th>Id</th>
		<th>SINO</th>
		<th>Causa</th>
		<th>Ponderacion</th>
		<th>cierre_id</th>
        <th>pregunta_id</th>
		<th>Acciones</th>
	</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($pregcierres as $pregcierre): ?>
	<tr>
		<td><?php echo $pregcierre['PregCierre']['id']; ?>
		</td> 
		<td><?php echo $this->Html->link($pregcierre['PregCierre']['sino'], array('controller' => 'pregcierres', 'action' => 'view', $pregcierre['PregCierre']['id'])); ?>
		</td>
		<td><?php echo $pregcierre['PregCierre']['causa']; ?> </td>
		<td><?php echo $pregcierre['PregCierre']['ponderacion']; ?> </td>
		<td><?php echo $pregcierre['Cierre']['observaciones']; ?> 		</td>
        <td><?php echo $pregcierre['Pregunta']['nombre']; ?>       </td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $pregcierre['PregCierre']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $pregcierre['PregCierre']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($pregcierre); ?>
</table>
