<!-- File: /app/View/Desvios/add.ctp -->

<h1>Add Desvio</h1>

<?php
	echo $this->Form->create('Desvio');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('analisis');

	echo $this->Form->input('informe_avance_id', array(
    'type'    => 'select',
    'options' => $informeavances,
    'empty'   => false
	));
	
	echo $this->Form->end('Guardar Desvio');
?>
