<!-- File: /app/View/Grupos/edit.ctp -->

<h1>Modificar Grupo</h1>
<?php
    echo $this->Form->create('Grupo');
    echo $this->Form->input('nombre');
    echo $this->Form->input('departamento_id', array(
    'type'    => 'select',
    'options' => $departamentos,
    'empty'   => false
	));
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Grupo');
    
?>
