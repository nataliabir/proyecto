<!-- File: /app/View/PregCierres/edit.ctp -->

<h1>Edit PregCierre</h1>
<?php
    echo $this->Form->create('PregCierre');
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

 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar PregCierre');
    
?>
