<!-- File: /app/View/FacRecDetalles/index.ctp -->
<h1>Detalle de Fatura</h1>
<table>
	<?php echo $this->Html->link('Agregar Detalle de Factura', array('controller' => 'facrecdetalles', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Descripcion</th>
		<th>Cantidad</th>
		<th>Monto</th>
		<th>Rubro</th>
		<th>Factura Recibida</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $facrecdetalles array, printing out post info -->
	<?php foreach ($facrecdetalles as $facrecdetalle): ?>
	<tr>
		<td><?php echo $facrecdetalle['FacRecDetalle']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($facrecdetalle['FacRecDetalle']['descripcion'], array('controller' => 'facrecdetalles', 'action' => 'view', $facrecdetalle['FacRecDetalle']['id'])); ?>
		</td>
		<td><?php echo $facrecdetalle['FacRecDetalle']['cantidad']; ?></td>
		<td><?php echo $facrecdetalle['FacRecDetalle']['monto']; ?></td>
		<td><?php echo $facrecdetalle['FacRecDetalle']['rubro_id']; ?></td>
		<td><?php echo $facrecdetalle['FacturaRecibida']['nro_factura']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $facrecdetalle['FacRecDetalle']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $facrecdetalle['FacRecDetalle']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($facrecdetalle); ?>
</table>