<!-- File: /app/View/Historias/edit.ctp -->

<h1>Modificar Historia</h1>
<?php
    echo $this->Form->create('Historia');
   echo $this->Form->input('nombre');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('proyecto_id', array(
    'type'    => 'select',
    'options' => $proyectos,
    'empty'   => false
	));
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Historia');
    
?>
