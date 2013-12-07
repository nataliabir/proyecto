<!-- File: /app/View/Integrantes/index.ctp -->
<h1>Integrante</h1>
<table>
	<?php echo $this->Html->link('Agregar Integrante', array('controller' => 'integrantes', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Dedicacion</th>
		<th>Pago Mensual</th>
		<th>Valor Seguro</th>
		<th>Fecha Inicial</th>
		<th>Fecha Final</th>
		<th>Persona</th>
		<th>Categoria Persona</th>
		<th>Rol</th>
		<th>Tipo Pago</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $integrantes array, printing out post info -->
	<?php foreach ($integrantes as $integrante): ?>
	<tr>
		<td><?php echo $integrante['Integrante']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($integrante['Integrante']['persona_id'], array('controller' => 'integrantes', 'action' => 'view', $integrante['Integrante']['id'])); ?>
		</td>
		<td><?php echo $integrante['Integrante']['dedicacion']; ?></td>
		<td><?php echo $integrante['Integrante']['pago_mensual']; ?></td>
		<td><?php echo $integrante['Integrante']['valor_seguro']; ?></td>
		<td><?php echo $integrante['Integrante']['fecha_ini']; ?></td>
		<td><?php echo $integrante['Integrante']['fecha_fin']; ?></td>
		<td><?php echo $integrante['Integrante']['categoria_persona_id']; ?></td>
		<td><?php echo $integrante['Rol']['descripcion']; ?></td>
		<td><?php echo $integrante['TipoPago']['descripcion']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $integrante['Integrante']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $integrante['Integrante']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($integrante); ?>
</table>
