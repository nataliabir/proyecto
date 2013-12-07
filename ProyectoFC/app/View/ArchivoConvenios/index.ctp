<!-- File: /app/View/ArchivoConvenios/index.ctp -->
<h1>Archivo Convenios</h1>
<table>
	<?php echo $this->Html->link('Agregar Archivo Convenios', array('controller' => 'archivoconvenios', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Ruta</th>
		<th>Tipo</th>
		<th>Acta Acuerdo</th>
		<th>Convenio Marco</th>
		<th>Convenio Especifico</th>
		<th>Accion</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($archivoconvenios as $archivoconvenio): ?>
	<tr>
		<td><?php echo $archivoconvenio['ArchivoConvenio']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($archivoconvenio['ArchivoConvenio']['nombre'], array('controller' => 'archivoconvenios', 'action' => 'view', $archivoconvenio['ArchivoConvenio']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($archivoconvenio['ArchivoConvenio']['ruta'], array('controller' => 'archivoconvenios', 'action' => 'view', $archivoconvenio['ArchivoConvenio']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($archivoconvenio['ArchivoConvenio']['tipo'], array('controller' => 'archivoconvenios', 'action' => 'view', $archivoconvenio['ArchivoConvenio']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($archivoconvenio['ActaAcuerdo']['fecha_creacion'], array('controller' => 'archivoconvenios', 'action' => 'view', $archivoconvenio['ArchivoConvenio']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($archivoconvenio['ConvenioMarco']['fecha_creacion'], array('controller' => 'archivoconvenios', 'action' => 'view', $archivoconvenio['ArchivoConvenio']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Html->link($archivoconvenio['ConvenioEspecifico']['fecha_firma'], array('controller' => 'archivoconvenios', 'action' => 'view', $archivoconvenio['ArchivoConvenio']['id'])); ?>
		</td>
		
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $archivoconvenio['ArchivoConvenio']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $archivoconvenio['ArchivoConvenio']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($archivoconvenio); ?>
</table>
