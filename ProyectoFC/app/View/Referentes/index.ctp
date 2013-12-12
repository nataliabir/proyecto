<!-- File: /app/View/Referentes/index.ctp -->
<h1>Referentes</h1>
<table>
	<?php echo $this->Html->link('Agregar Referente', array('controller' => 'referentes', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Telefono</th>
		<th>Comitente</th>
		<th>Acciones</th>

</tr>

	<!-- Here is where we loop through our $directors array, printing out post info -->
	<?php foreach ($referentes as $referente): ?>
	<tr>
		<td><?php echo $referente['Referente']['id']; ?></td>
		<td> <?php echo $this->Html->link($referente['Referente']['nombre'], array('controller' => 'referentes', 'action' => 'view', $referente['Referente']['id'])); ?> </td>
		<td> <?php echo $this->Html->link($referente['Referente']['email'], array('controller' => 'referentes', 'action' => 'view', $referente['Referente']['id'])); ?> </td>
	     <td> <?php echo $this->Html->link($referente['Referente']['telefono'], array('controller' => 'referentes', 'action' => 'view', $referente['Referente']['id'])); ?> </td>
    	<td> <?php echo $this->Html->link($referente['Comitente']['nombre'], array('controller' => 'referentes', 'action' => 'view', $referente['Referente']['id'])); ?> </td>

		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $referente['Referente']['id']),
                array('confirm' => 'Desea borrar?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $referente['Referente']['id'])); ?>
	</tr>
	<?php endforeach; ?>
	<?php unset($referente); ?>
</table>
