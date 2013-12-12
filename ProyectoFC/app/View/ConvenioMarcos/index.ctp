<!-- File: /app/View/ConveniosMarcos/index.ctp -->
<h1>Convenio Marco</h1>
<table>
	<?php echo $this->Html->link('Agregar Convenio Marco', array('controller' => 'conveniomarcos', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Codigo</th>
		<th>Fecha Creacion</th>
		<th>Fecha Firma</th>
		<th>Fecha Fin</th>
		<th>Fecha Devolucion</th>
		<th>Firma UTN Nombre</th>
		<th>Firma UTN Cargo</th>
		<th>Firma Comit Nombre</th>
		<th>Firma Comit Cargo</th>
		<th>Objetivo</th>
		<th>Duracion</th>
		<th>Observaciones</th>
		<th>Estado</th>
		<th>Comitente</th>
		<th>Entidad Firmante</th>
		<th>Acciones</th>
		
			</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($conveniomarcos as $conveniomarco): ?>
	<tr>
		<td><?php echo $conveniomarco['ConvenioMarco']['id']; ?></td>
		<td><?php echo $this->Html->link($conveniomarco['ConvenioMarco']['codigo'], array('controller' => 'conveniomarcos', 'action' => 'view', $conveniomarco['ConvenioMarco']['id'])); ?>		</td>
		<td><?php echo $conveniomarco['ConvenioMarco']['fecha_creacion']; ?>		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['fecha_firma']; ?>		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['fecha_fin']; ?> 	</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['fecha_devolucion']; ?> 		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['firm_utn_nombre']; ?> 		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['firm_utn_cargo']; ?> 		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['firm_comit_nombre']; ?> 		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['firm_comit_cargo']; ?> 		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['objetivo']; ?> 		</td>
		<td><?php echo $conveniomarco['ConvenioMarco']['duracion']; ?>		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['observaciones']; ?> 		</td>
		<td> <?php echo $conveniomarco['ConvenioMarco']['estado']; ?> 		</td>
		<td> <?php echo $conveniomarco['Comitente']['nombre']; ?> 		</td>
		<td> <?php echo $conveniomarco['EntidadFirmante']['nombre']; ?> 		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $conveniomarco['ConvenioMarco']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $conveniomarco['ConvenioMarco']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($conveniomarco); ?>
</table>