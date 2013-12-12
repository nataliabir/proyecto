<?php
class Persona extends AppModel {
	var $name = 'Persona';
	      var $validate = array('dni' => array('rule' => 'notEmpty'),
    		'nombre' => array('rule' => 'notEmpty'), 
    		'apellido' => array('rule' => 'notEmpty'),
    		'email' => array('rule' => 'notEmpty'),
    		'ciudad_id' => array('rule' => 'notEmpty'));
	
	// RELACION PERSONA:CIUDAD 1:1
	var $belongsTo = array(
			'Ciudad' => array(
					'className'     => 'Ciudad',
					'foreignKey'    => 'ciudad_id',
							),
			'Provincia' => array(
					'className'     => 'Provincia',
					'foreignKey'    => 'provincia_id',
			),
);
	// RELACION PERSONA:INTEGRANTE 1:1
	var $hasOne = array(
			'Integrante' => array(
					'className'     => 'Integrante',
					'foreignKey'    => 'persona_id',
			)
	);
	
	
}
?>