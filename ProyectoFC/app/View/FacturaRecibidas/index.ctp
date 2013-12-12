<!-- File: /app/View/FacturaRecibidas/index.ctp -->
<h1>Factura</h1>
<table>
	<?php echo $this->Html->link('Agregar Factura', array('controller' => 'facturarecibidas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nro Factura</th>
		<th>Nro Sucursal</th>
		<th>Fecha</th>
		<th>Comitente</th>
		<th>Tipo Factura</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $facturarecibidas array, printing out post info -->
	<?php foreach ($facturarecibidas as $facturarecibida): ?>
	<tr>
		<td><?php echo $facturarecibida['FacturaRecibida']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($facturarecibida['FacturaRecibida']['nro_factura'], array('controller' => 'facturarecibidas', 'action' => 'view', $facturarecibida['FacturaRecibida']['id'])); ?>
		</td>
		<td><?php echo $facturarecibida['FacturaRecibida']['nro_sucursal']; ?></td>
		<td><?php echo $facturarecibida['FacturaRecibida']['fecha']; ?></td>
		<td><?php echo $facturarecibida['Comitente']['nombre']; ?></td>
		<td><?php echo $facturarecibida['TipoFactura']['nombre']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $facturarecibida['FacturaRecibida']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $facturarecibida['FacturaRecibida']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($facturarecibida); ?>
</table>