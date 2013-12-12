<!-- File: /app/View/Contactos/index.ctp -->
<h1>Contactos</h1>
<table>
	<?php echo $this->Html->link('Agregar Contactos', array('controller' => 'contactos', 'action' => 'add')); ?>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Domicilio</th>
		<th>Telefono</th>
		<th>Observaciones</th>
		<th>Comitente</th>
		<th>Ciudad</th>
		<th>Provincia</th>
		<th>Acciones</th>
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($contactos as $contacto): ?>
	<tr>
		<td> <?php echo $contacto['Contacto']['id']; ?></td>
		<td> <?php echo $contacto['Contacto']['nombre'], array('controller' => 'contactos', 'action' => 'view', $contacto['Contacto']['id'])); ?> </td>
		<td> <?php echo $contacto['Contacto']['apellido']; ?> </td>
		<td> <?php echo $contacto['Contacto']['domicilio']; ?> 	</td>
		<td> <?php echo $contacto['Contacto']['telefono']; ?> </td>
		<td> <?php echo $contacto['Contacto']['observaciones']; ?> </td>
		<td> <?php echo $contacto['Comitente']['nombre']; ?> </td>
		<td> <?php echo $contacto['Ciudad']['nombre']; ?> </td>
		<td> <?php echo $contacto['Provincia']['nombre']; ?> </td>
		
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $contacto['Contacto']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $contacto['Contacto']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($contacto); ?>
</table>