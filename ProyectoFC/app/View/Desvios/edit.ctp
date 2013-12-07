<!-- File: /app/View/Desvios/edit.ctp -->

<h1>Edit Desvio</h1>
<?php
    echo $this->Form->create('Desvio');
   	echo $this->Form->input('descripcion');
	echo $this->Form->input('analisis');
	echo $this->Form->input('informe_avance_id', array(
    'type'    => 'select',
    'options' => $informeavances,
    'empty'   => false
	));
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Desvio');
    
?>
