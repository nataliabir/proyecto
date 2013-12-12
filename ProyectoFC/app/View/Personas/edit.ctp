<!-- File: /app/View/Personas/edit.ctp -->

<h1>Edit Persona</h1>
<?php
    echo $this->Form->create('Persona');
   	echo $this->Form->input('dni');
	echo $this->Form->input('nombre');
	echo $this->Form->input('apellido');
	echo $this->Form->input('direccion');
	echo $this->Form->input('email');
	echo $this->Form->input('telefono');
	echo $this->Form->input('cuit');
	echo $this->Form->input('especialidad');
	echo $this->Form->input('titulo');
	echo $this->Form->input('ciudad_id', array(
    'type'    => 'select',
    'options' => $ciudads,
    'empty'   => false
	));
	
	
	echo $this->Form->input('provincia_id', array(
    'type'    => 'select',
    'options' => $provincias,
    'empty'   => false
	));
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Persona');
    
?>