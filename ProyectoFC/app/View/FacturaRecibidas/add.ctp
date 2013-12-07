<!-- File: /app/View/FacturaRecibidas/add.ctp -->

<h1>Nueva Factura</h1>

<?php
	echo $this->Form->create('FacturaRecibida');
	echo $this->Form->input('nro_factura');
	echo $this->Form->input('nro_sucursal');
	echo $this->Form->input('fecha');
	    echo $this->Form->input('comitente_id', array(
    'type'    => 'select',
    'options' => $comitentes,
    'empty'   => false
	));
	
    echo $this->Form->input('tipo_factura_id', array(
    'type'    => 'select',
    'options' => $tipofacturas,
    'empty'   => false
	));
	echo $this->Form->end('Guardar Factura');
?>
