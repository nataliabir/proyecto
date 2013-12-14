<!-- File: /app/View/Pregcierres/add.ctp -->

<h1>Add Pregunta de Cierre</h1>

<?php
	echo $this->Form->create('Pregcierre');
	echo $this->Form->input('sino');
	echo $this->Form->input('causa');
	echo $this->Form->input('ponderacion');
	
	echo $this->Form->input('cierre_id', array(
    'type'    => 'select',
    'options' => $cierres,
    'empty'   => false
	));
	echo $this->Form->input('pregunta_id', array(
    'type'    => 'select',
    'options' => $preguntas,
    'empty'   => false
	));
	echo $this->Form->end('Guardar Pregcierre');
?>



