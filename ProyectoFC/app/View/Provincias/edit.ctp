<!-- File: /app/View/Provincia/edit.ctp -->

<h1>Edit Provincia</h1>
<?php
    echo $this->Form->create('Provincia');
    echo $this->Form->input('nombre');
	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Provincia');
    
?>
