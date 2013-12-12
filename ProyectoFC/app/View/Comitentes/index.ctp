<!-- File: /app/View/Comitentes/index.ctp -->
<h1>Comitente</h1>
<table>
	<?php echo $this->Html->link('Agregar Comitente', array('controller' => 'comitentes', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Responsable</th>
		<th>CUIT</th>
		<th>Email</th>
		<th>Pagina Web</th>
		<th>Telefono</th>
		<th>Ciudad</th>
		<th>Provincia</th>
		<th>categoria_iva_id</th>
		<th>tipo_comitente_id</>
		<th>Acciones</>
		 
	</tr>
	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($comitentes as $comitente): ?>
	<tr>
		<td><?php echo $comitente['Comitente']['id']; ?></td>
		<td> <?php echo $this->Html->link($comitente['Comitente']['nombre'], array('controller' => 'comitentes', 'action' => 'view', $comitente['Comitente']['id'])); ?>
		</td>
		<td> <?php echo $comitente['Comitente']['responsable']; ?> 	</td>
		<td> <?php echo $comitente['Comitente']['cuit']; ?> 	</td>
		<td> <?php echo $comitente['Comitente']['email']; ?> 	</td>
		<td> <?php echo $comitente['Comitente']['pag_web']; ?> 	</td>
		<td> <?php echo $comitente['Comitente']['telefono']; ?> 	</td>
		<td> <?php echo $comitente['Ciudad']['nombre']; ?> 		</td>
		<td> <?php echo $comitente['Provincia']['nombre']; ?> 	</td>
		<td> <?php echo $comitente['CategoriaIva']['descripcion']; ?> 		</td>
		<td> <?php echo $comitente['TipoComitente']['nombre']; ?> 		</td>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $comitente['Comitente']['id']),
                array('confirm' => 'Desea borrar?'));?>
                
                
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $comitente['Comitente']['id'])); ?>
	</tr>
	
			
	<?php endforeach; ?>
	<?php unset($comitente); ?>
</table>