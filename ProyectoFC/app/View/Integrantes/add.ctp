<!-- File: /app/View/Integrantes/add.ctp -->

<h1>Nuevo Integrante</h1>

<?php
	echo $this->Form->create('Integrante');
	echo $this->Form->input('dedicacion');
	echo $this->Form->input('pago_mensual');
	echo $this->Form->input('valor_seguro');
	echo $this->Form->input('fecha_ini');
	echo $this->Form->input('fecha_fin');
	echo $this->Form->input('persona_id', array(
    'type'    => 'select',
    'options' => $personas,
    'empty'   => false
	));

	echo $this->Form->input('categoria_persona_id', array(
    'type'    => 'select',
    'options' => $categoriapersonas,
    'empty'   => false
	));

	
	echo $this->Form->input('rol_id', array(
    'type'    => 'select',
    'options' => $rols,
    'empty'   => false
	));

	echo $this->Form->input('tipo_pago_id', array(
    'type'    => 'select',
    'options' => $tipopagos,
    'empty'   => false
	));

	echo $this->Form->end('Guardar Integrante');
?>
