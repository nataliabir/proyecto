<!-- File: /app/View/Ciudads/edit.ctp -->

<h1>Edit Ciudad</h1>
<?php
   echo $this->Form->create('Ciudad');
	echo $this->Form->input('nombre');
	echo $this->Form->input('cp');
	echo $this->Form->input('provincia_id', array(
    'type'    => 'select',
    'options' => $provincias,
    'empty'   => false
	));

	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Ciudad');
    
?>
