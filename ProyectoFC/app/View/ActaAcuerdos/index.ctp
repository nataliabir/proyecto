<!-- File: /app/View/ActaAcuerdos/index.ctp -->
<h1>Acta Acuerdo</h1>
<table>
	<?php echo $this->Html->link('Agregar Acta Acuerdo', array('controller' => 'actaacuerdos', 'action' => 'add')); ?>
	<tr>
	    <th>Id</th>
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
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['fecha_creacion'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
        <td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['fecha_devolucion'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['firm_utn_nombre'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['firm_utn_dni'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['firm_utn_cargo'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['firm_comit_nombre'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['firm_comit_dni'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['firm_comit_cargo'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['objetivo'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['fecha_firma'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['fecha_ini'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['fecha_fin'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['duracion'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['respons_comit'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['respons_utn'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['monto'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ActaAcuerdo']['estado'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['Proyecto']['nombre'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['ConvenioMarco']['fecha_creacion'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['Departamento']['nombre'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['Grupo']['nombre'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['Comitente']['nombre'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td><?php echo $this->Html->link($actaacuerdo['EntidadFirmante']['nombre'], array('controller' => 'actaacuerdos', 'action' => 'view', $actaacuerdo['ActaAcuerdo']['id'])); ?></td>
		<td>
		
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $actaacuerdo['ActaAcuerdo']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $actaacuerdo['ActaAcuerdo']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($actaacuerdo); ?>
</table>