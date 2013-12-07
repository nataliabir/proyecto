<!-- File: /app/View/Etapas/edit.ctp -->

<h1>Modificar Etapa</h1>
<?php
    echo $this->Form->create('Etapa');
    echo $this->Form->input('codigo');
    echo $this->Form->input('nombre');
    echo $this->Form->input('plan_id', array(
    'type'    => 'select',
    'options' => $plans,
    'empty'   => false
	));
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Etapa');
    
?>
