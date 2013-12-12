<!-- File: /app/View/ActaAcuerdos/index.ctp -->
<h1>Acta Acuerdo</h1>
<table>
	<?php echo $this->Html->link('Agregar Acta Acuerdo', array('controller' => 'actaacuerdos', 'action' => 'add')); ?>
	<tr>
	    <th>Id</th>
	    <th>Codigo</th>
		<th>Fecha Creacion</th>
		<th>Fecha Devolucion</th>
		<th>Firma UTN Nombre</th>
		<th>Firma UTN DNI</th>
		<th>Firma UTN Cargo</th>
		<th>Firma Comit Nombre</th>
		<th>Firma Comit DNI</th>
		<th>Firma Comit Cargo</th>
		<th>Objetivo</th>
		<th>Fecha Firma</th>
		<th>Fecha Inicio</th>
		<th>Fecha Fin</th>
		<th>Duracion</th>
		<th>Responsable Comitente</th>
		<th>Responsable UTN</th>
       		<th>Monto</th>
                <th>Estado</th>
                <th>Proyecto</th>
                <th>Convenio Marco</th>
                <th>Departamento</th>
                <th>Grupo</th>
                <th>Comitente</th>
                <th>Entidad Firmante</th>
                
		<th>Accion</th>
		
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($actaacuerdos as $actaacuerdo): ?>
	<tr>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['id']; ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['codigo'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['fecha_creacion']; ?></td>
        <td><?php echo $actaacuerdo['ActaAcuerdo']['fecha_devolucion']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['firm_utn_nombre']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['firm_utn_dni']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['firm_utn_cargo']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['firm_comit_nombre']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['firm_comit_dni']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['firm_comit_cargo']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['objetivo']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['fecha_firma']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['fecha_ini']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['fecha_fin']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['duracion']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['respons_comit']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['respons_utn']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['monto']; ?></td>
		<td><?php echo $actaacuerdo['ActaAcuerdo']['estado']; ?></td>
		<td><?php echo $actaacuerdo['Proyecto']['nombre']; ?></td>
		<td><?php echo $actaacuerdo['ConvenioMarco']['fecha_creacion']; ?></td>
		<td><?php echo $actaacuerdo['Departamento']['nombre']; ?></td>
		<td><?php echo $actaacuerdo['Grupo']['nombre']; ?></td>
		<td><?php echo $actaacuerdo['Comitente']['nombre']; ?></td>
		<td><?php echo $actaacuerdo['EntidadFirmante']['nombre']; ?></td>
		<td>
		
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $actaacuerdo['ActaAcuerdo']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $actaacuerdo['ActaAcuerdo']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($actaacuerdo); ?>
</table>