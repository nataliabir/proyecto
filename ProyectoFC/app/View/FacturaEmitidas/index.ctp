<!-- File: /app/View/FacturaEmitidas/index.ctp -->
<h1>Factura</h1>
<table>
	<?php echo $this->Html->link('Agregar Factura', array('controller' => 'facturaemitidas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nro Factura</th>
		<th>Nro Sucursal</th>
		<th>Fecha</th>
		<th>Comitente</th>
		<th>Tipo Factura</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $facturaemitidas array, printing out post info -->
	<?php foreach ($facturaemitidas as $facturaemitida): ?>
	<tr>
		<td><?php echo $facturaemitida['FacturaEmitida']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($facturaemitida['FacturaEmitida']['nro_factura'], array('controller' => 'facturaemitidas', 'action' => 'view', $facturaemitida['FacturaEmitida']['id'])); ?>
		</td>
		<td><?php echo $facturaemitida['FacturaEmitida']['nro_sucursal']; ?></td>
		<td><?php echo $facturaemitida['FacturaEmitida']['fecha']; ?></td>
		<td><?php echo $facturaemitida['Comitente']['nombre']; ?></td>
		<td><?php echo $facturaemitida['TipoFactura']['nombre']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $facturaemitida['FacturaEmitida']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $facturaemitida['FacturaEmitida']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($facturaemitida); ?>
</table>