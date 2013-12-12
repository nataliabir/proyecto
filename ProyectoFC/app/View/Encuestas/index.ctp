<!-- File: /app/View/Encuestas/index.ctp -->
<h1>Encuesta</h1>
<table>
	<?php echo $this->Html->link('Agregar Encuesta', array('controller' => 'encuestas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Fecha</th>
		<th>Primer Proyecto</th>
		<th>Informado OT</th>
		<th>Informado UVT</th>
		<th>Eleccion UTN</th>
		<th>Volveria a elegir UTN</th>
		<th>Motivo</th>
		<th>Asesoramiento Previo</th>
		<th>Frecuencia Contacto</th>
		<th>Cumplimiento</th>
		<th>Trato Profesionales</th>
		<th>Atencion Reclamos</th>
		<th>Producto Entregado</th>
		<th>Satisfaccion Espectativas</th>
		<th>Evaluacion General</th>
		<th>Observaciones</th>
		<th>Proyecto</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $encuesta array, printing out post info -->
	<?php foreach ($encuestas as $encuesta): ?>
	<tr>
		<td><?php echo $encuesta['Encuesta']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($encuesta['Encuesta']['fecha'], array('controller' => 'encuestas', 'action' => 'view', $encuesta['Encuesta']['id'])); ?>
		</td>
		<td><?php echo $encuesta['Encuesta']['primer_proy_UTN']; ?></td>
		<td><?php echo $encuesta['Encuesta']['informado_OT']; ?></td>
		<td><?php echo $encuesta['Encuesta']['informado_UVT']; ?></td>
		<td><?php echo $encuesta['Encuesta']['eleccion_UTN']; ?></td>
		<td><?php echo $encuesta['Encuesta']['volveria_elegir_UTN']; ?></td>
		<td><?php echo $encuesta['Encuesta']['motivo']; ?></td>
		<td><?php echo $encuesta['Encuesta']['asesoramiento_previo']; ?></td>
		<td><?php echo $encuesta['Encuesta']['frecuencia_contacto']; ?></td>
		<td><?php echo $encuesta['Encuesta']['cumplimiento']; ?></td>
		<td><?php echo $encuesta['Encuesta']['trato_profesionales']; ?></td>
		<td><?php echo $encuesta['Encuesta']['atencion_reclamos']; ?></td>
		<td><?php echo $encuesta['Encuesta']['producto_entregado']; ?></td>
		<td><?php echo $encuesta['Encuesta']['satisfaccion_expectativa']; ?></td>
		<td><?php echo $encuesta['Encuesta']['evaluacion_gral']; ?></td>
		<td><?php echo $encuesta['Encuesta']['observaciones']; ?></td>
		<td><?php echo $encuesta['Proyecto']['nombre']; ?></td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $encuesta['Encuesta']['id']),
                array('confirm' => 'Está seguro de que desea borrar?'));?>
		<?php echo $this->Html->link('Editar', array('action' => 'edit', $encuesta['Encuesta']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($encuesta); ?>
</table>
