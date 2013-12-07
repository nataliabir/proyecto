<!-- File: /app/View/Archivos/edit.ctp -->

<h1>Edit Archivos</h1>
<?php
    echo $this->Form->create('Archivo');
    echo $this->Form->input('nombre');
	echo $this->Form->input('ruta');
	echo $this->Form->input('tipo');
echo $this->Form->input('proyecto_id', array(
	'type'    => 'select',
    'options' => $proyectos,
    'empty'   => false
	));

	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Archivo');
    
?>
