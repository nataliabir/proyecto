<!-- File: /app/View/Provincias/add.ctp -->

<h1>Add Provincias</h1>

<?php
	echo $this->Form->create('provincias');
	echo $this->Form->input('nombre');
	echo $this->Form->end('Guardar Provincia');
?>