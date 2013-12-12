<!-- File: /app/View/Referentes/add.ctp -->

<h1>Add Referente</h1>

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
	echo $this->Form->end('Guardar Referente');
?> 
