<!-- File: /app/View/Provincias/index.ctp -->
<?php
//echo $this->Html->script(array('/webroot/js/jquery-1.8.3.min', '/webroot/js/jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));
//echo $this->Html->css('/webroot/css/jquery-ui-1.9.2.custom', null, array('inline' => false));

?>
<head>
	<style type="text/css">
	body {
		margin-top: 50px;
		margin-bottom: 100px;
	}
	</style>
</head>
<div class="well">
<h1>Provincias</h1>
</div>

	<button class="btn btn-info">
	<?php echo $this->Html->link('Agregar Provincia', array('controller' => 'provincias', 'action' => 'add')); ?>
	</button>
	<p></p>

	<table  class="table table-hover">
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Accion</th>
		
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->
	<?php foreach ($provincias as $provincia): ?>
	<tr>
		<td><?php echo $provincia['Provincia']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($provincia['Provincia']['nombre'], array('controller' => 'provincias', 'action' => 'view', $provincia['Provincia']['id'])); ?>
		</td>
		<td>
		<?php echo $this->Form->postLink('Borrar',
                array('action' => 'delete', $provincia['Provincia']['id']),
                array('confirm' => 'Are you sure?'));?>
                
                
		<?php echo $this->Html->link (__('Editar', true), array('action' => 'edit', $provincia['Provincia']['id'])); ?>
				
		</td>
		
	</tr>
	<?php endforeach; ?>
	<?php unset($provincia); ?>
	<?php echo $this->Js->writeBuffer(); ?>
</table>