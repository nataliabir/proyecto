<!-- File: /app/View/Ciudads/add.ctp -->

<h1>Add Ciudad</h1>

<?php
	echo $this->Form->create('Ciudad');
	echo $this->Form->input('nombre');
	echo $this->Form->input('cp');
echo $this->Form->input('provincia_id', array(
    'type'    => 'select',
    'options' => $provincias,
    'empty'   => false
	));
	echo $this->Form->end('Guardar Ciudad');
?>
