<!-- File: /app/View/Comitentes/add.ctp -->

<h1>Add Comitente</h1>

<?php
	echo $this->Form->create('Comitente');
	echo $this->Form->input('nombre');
	echo $this->Form->input('responsable');
	echo $this->Form->input('cuit');
	echo $this->Form->input('email');
	echo $this->Form->input('pag_web');
	echo $this->Form->input('telefono');
	echo $this->Form->input('provincia_id', array(
    'type'    => 'select',
    'options' => $provincias,
    'empty'   => false
	));
	echo $this->Form->input('ciudad_id', array(
    'type'    => 'select',
    'options' => $ciudads,
    'empty'   => false
	));
	echo $this->Form->input('categoria_iva_id', array(
    'type'    => 'select',
    'options' => $categoriaivas,
    'empty'   => false
	));
	echo $this->Form->input('tipo_comitente_id', array(
    'type'    => 'select',
    'options' => $tipocomitentes,
    'empty'   => false
	));
	echo $this->Form->end('Guardar Comitente');
?>