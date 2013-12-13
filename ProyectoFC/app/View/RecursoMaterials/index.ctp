<!-- File: /app/View/RecursoMaterials/index.ctp -->
<h1>RecursoMaterials</h1>
<table>
	<?php echo $this->Html->link('Agregar RecursoMaterial', array('controller' => 'recursomaterials', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Descripcion</th>
		<th>Costo Total</th>
		<th>Plan</th>
        <th>Rubro</th>
        <th>frecuencia</th>
        <th>Accion</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($recursomaterials as $recursomaterial): ?>
	<tr>
		<td><?php echo $recursomaterial['RecursoMaterial']['id']; ?> </td>
		<td><?php echo $recursomaterial ['RecursoMaterial']['descripcion']; ?>
		</td>
		<td><?php echo $recursomaterial ['RecursoMaterial']['costo_total']; ?>
		</td>
		<td><?php echo $recursomaterial ['Plan']['nombre']; ?>
		</td>
		<td><?php echo $recursomaterial ['Rubro']['nombre']; ?>
		</td>
		<td><?php echo $recursomaterial ['Frecuencia']['nombre']; ?>
		</td>
	<td>
	
	<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $recursomaterial['RecursoMaterial']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $recursomaterial['RecursoMaterial']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($recursomaterial); ?>
</table>
