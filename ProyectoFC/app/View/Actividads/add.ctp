<!-- File: /app/View/Actividads/add.ctp -->

<h1>Add Actividad</h1>

<?php
	echo $this->Form->create('Actividad');
	echo $this->Form->input('nombre');
	echo $this->Form->input('prod_entregable');
	echo $this->Form->input('mes_ini');
	echo $this->Form->input('mes_fin');
	echo $this->Form->input('hitos');
	echo $this->Form->input('etapa_id', array(
    'type'    => 'select',
    'options' => $etapas,
    'empty'   => false
	));
	echo $this->Form->end('Guardar Actividad');
?>
