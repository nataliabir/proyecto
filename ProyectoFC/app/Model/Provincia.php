<?php
class Provincia extends AppModel {
	var $name = 'Provincia';
	var $validate = array('nombre' => array('rule' =>'notEmpty'));
	//------------------------------------------
	// RELACION PROVINCIA:CIUDAD 1:N
/*	var $belongsTo = 	array(
			// RELACION PROVINCIA:CIUDAD 1:N
			'Ciudad' => array(
					'className'     => 'Ciudad',
					'foreignKey'    => 'ciudad_id',
			),
			// RELACION PROVINCIA:COMITENTE 1:N
	//var $belongsTo = 	array(
			'Comitente' => array(
					'className'     => 'Comitente',
					'foreignKey'    => 'comitente_id',
			),
			// RELACION PROVINCIA:CONTACTO 1:N
	//var $belongsTo = 	array(
			'Contacto' => array(
					'className'     => 'Contacto',
					'foreignKey'    => 'contacto_id',
			)
	);*/
}
?>

