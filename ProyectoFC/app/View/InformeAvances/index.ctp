<!-- File: /app/View/InformeAvances/index.ctp -->
<h1>Informe de Avance</h1>
<table>
	<?php echo $this->Html->link('Agregar Informe de Avance', array('controller' => 'informeavances', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Fecha Fin Etapa</th>
		<th>Periodo Reporte Inicio</th>
		<th>Periodo Reporte Fin</th>
		<th>Desvio</th>
		<th>Fecha Reporte</th>
		<th>Proyecto</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $informeavances array, printing out post info -->
	<?php foreach ($informeavances as $informeavance): ?>
	<tr>
		<td><?php echo $informeavance['InformeAvance']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($informeavance['InformeAvance']['fecha_fin_etapa'], array('controller' => 'informeavances', 'action' => 'view', $informeavance['InformeAvance']['id'])); ?>
		</td>
		<td><?php echo $informeavance['InformeAvance']['periodo_reporte_ini']; ?></td>
		<td><?php echo $informeavance['InformeAvance']['periodo_reporte_fin']; ?></td>
		<td><?php echo $informeavance['InformeAvance']['desvio']; ?></td>
		<td><?php echo $informeavance['InformeAvance']['fecha_reporte']; ?></td>
		<td><?php echo $informeavance['Proyecto']['nombre']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $informeavance['InformeAvance']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $informeavance['InformeAvance']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($informeavance); ?>
</table>
