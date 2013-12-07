<!-- File: /app/View/Actividads/edit.ctp -->

<h1>Edit Actividad</h1>
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
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Actividad');
    
?>