<!-- File: /app/View/Personas/index.ctp -->
<h1>Personas</h1>
<table>
	<?php echo $this->Html->link('Agregar Persona', array('controller' => 'personas', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>DNI</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Direccion</th>
		<th>Email</th>
		<th>Telefono</th>
		<th>CUIT</th>
		<th>Especialidad</th>
		<th>Titulo</th>
		<th>Ciudad</th>
		<th>Provincia</th>
		<th>Acciones</th>
		   
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo $persona['Persona']['id']; ?></td>
		<td>
		<?php echo $this->Html->link($persona['Persona']['dni'], array('controller' => 'personas', 'action' => 'view', $persona['Persona']['id'])); ?>
		</td>
		<td> <?php echo $persona['Persona']['nombre']; ?>		</td>
		<td> <?php echo $persona['Persona']['apellido']; ?> 		</td>
		<td> <?php echo $persona['Persona']['direccion']; ?> 		</td>
		<td> <?php echo $persona['Persona']['email']; ?> 		</td>
		<td> <?php echo $persona['Persona']['telefono']; ?> 		</td>
		<td> <?php echo $persona['Persona']['cuit']; ?> 		</td>
		<td> <?php echo $persona['Persona']['especialidad']; ?> 		</td>
		<td> <?php echo $persona['Persona']['titulo']; ?> 		</td>
		<td> <?php echo $persona['Ciudad']['nombre']; ?> 		</td>
		<td> <?php echo $persona['Provincia']['nombre']; ?> 		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $persona['Persona']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $persona['Persona']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($persona); ?>
</table>