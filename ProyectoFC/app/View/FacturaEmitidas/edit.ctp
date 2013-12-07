<!-- File: /app/View/FacturaEmitidas/edit.ctp -->

<h1>Modificar Factura</h1>
<?php
    echo $this->Form->create('FacturaEmitida');
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
 	echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Guardar Factura');
    
?>
