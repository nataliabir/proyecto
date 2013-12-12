<!-- File: /app/View/FacEmitDetalles/index.ctp -->
<h1>Detalle de Fatura</h1>
<table>
	<?php echo $this->Html->link('Agregar Detalle de Factura', array('controller' => 'facemitdetalles', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Descripcion</th>
		<th>Cantidad</th>
		<th>Monto</th>
		<th>Rubro</th>
		<th>Factura Emitida</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $facemitdetalles array, printing out post info -->
	<?php foreach ($facemitdetalles as $facemitdetalle): ?>
	<tr>
		<td><?php echo $facemitdetalle['FacEmitDetalle']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($facemitdetalle['FacEmitDetalle']['descripcion'], array('controller' => 'facemitdetalles', 'action' => 'view', $facemitdetalle['FacEmitDetalle']['id'])); ?>
		</td>
		<td><?php echo $facemitdetalle['FacEmitDetalle']['cantidad']; ?></td>
		<td><?php echo $facemitdetalle['FacEmitDetalle']['monto']; ?></td>
		<td><?php echo $facemitdetalle['FacEmitDetalle']['rubro_id']; ?></td>
		<td><?php echo $facemitdetalle['FacturaEmitida']['nro_factura']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $facemitdetalle['FacEmitDetalle']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $facemitdetalle['FacEmitDetalle']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($facemitdetalle); ?>
</table>


