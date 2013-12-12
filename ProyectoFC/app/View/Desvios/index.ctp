<!-- File: /app/View/Desvios/index.ctp -->
<h1>Desvios</h1>
<table>
	<?php echo $this->Html->link('Agregar Desvio', array('controller' => 'desvios', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Descripcion</th>
		<th>Analisis</th>
		<th>Informe de Avance</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($desvios as $desvio): ?>
	<tr>
		<td><?php echo $desvio['Desvio']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($desvio['Desvio']['descripcion'], array('controller' => 'desvios', 'action' => 'view', $desvio['Desvio']['id'])); ?>
		</td>
		<td> <?php echo $desvio['Desvio']['analisis']; ?> 	</td> 	
		<td> <?php echo $desvio['InformeAvance']['nombre']; ?> 		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $desvio['Desvio']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $desvio['Desvio']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($desvio); ?>
</table>