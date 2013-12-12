<!-- File: /app/View/ConvenioEspecificos/index.ctp -->
<h1>Convenio Especifico</h1>
<table>
	<?php echo $this->Html->link('Agregar Convenio Especifico', array('controller' => 'convenioespecificos', 'action' => 'add')); ?>
	<tr>
		<th>Id</th>
		<th>Codigo</th>
		<th>Fecha Devolucion</th>
		<th>responsable utn</th>
		<th>responsable comitente</th>
		<th>Fecha Inicio</th>
		<th>Fecha Fin</th>
		<th>Fecha Firma</th>
		<th>Firma UTN</th>
		<th>Cargo UTN</th>
		<th>Firma Comitente</th>
		<th>Cargo Comitente</th>
		<th>Objetivo</th>
		<th>Duracion</th>
		<th>Observaciones</th>
	    <th>Monto</th>
		<th>Estado</th>
		<th>Departamento</th>
		<th>Grupo</th>
		<th>Comitente</th>
		<th>Proyecto</th>
		<th>Entidad Firmante</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($convenioespecificos as $convenioespecifico): ?>
	<tr>
		<td><?php echo $convenioespecifico['ConvenioEspecifico']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($convenioespecifico['ConvenioEspecifico']['codigo'], array('controller' => 'convenioespecificos', 'action' => 'view', $convenioespecifico['ConvenioEspecifico']['id'])); ?>
		</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['fecha_devolucion']; ?> 		</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['responsable_utn']; ?> </td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['responsable_comit']; ?> 	</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['fecha_ini']; ?> 		</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['fecha_fin']; ?>	</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['fecha_firma']; ?> </td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['firm_utn_nombre']; ?> </td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['firm_utn_cargo']; ?> </td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['firm_comit_nombre']; ?> 	</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['firm_comit_cargo']; ?> </td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['objetivo']; ?> </td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['duracion']; ?> 		</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['observaciones']; ?> 	</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['monto']; ?> 	</td>
		<td> <?php echo $convenioespecifico['ConvenioEspecifico']['estado']; ?> </td>
		<td> <?php echo $convenioespecifico['Departamento']['nombre']; ?>	</td>
		<td> <?php echo $convenioespecifico['Grupo']['nombre']; ?>	</td>
		<td> <?php echo $convenioespecifico['Comitente']['nombre']; ?>		</td>
		<td> <?php echo $convenioespecifico['Comitente']['nombre']; ?>	</td>
		<td> <?php echo $convenioespecifico['EntidadFirmante']['nombre']; ?> 	</td>
		
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $convenioespecifico['ConvenioEspecifico']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $convenioespecifico['ConvenioEspecifico']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($convenioespecifico); ?>
</table>