<!-- File: /app/View/Referentes/edit.ctp -->

<h1>Edit Referente</h1>
<?php
echo $this->Form->create('Referente');
	echo $this->Form->input('nombre');
	echo $this->Form->input('email');
	echo $this->Form->input('telefono');
	
    echo $this->Form->input('comitente_id', array(
    'type'    => 'select',
    'options' => $comitentes,
    'empty'   => false
	));
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Referente');
    
?>
