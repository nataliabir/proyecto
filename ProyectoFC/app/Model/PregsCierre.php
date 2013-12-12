<?php
class PregsCierre extends AppModel {
	  var $name = 'PregsCierre';
	  var $validate = array('sino' => array('rule' =>'notEmpty'), 
    		'causa' => array('rule' => 'notEmpty'), 
    		'ponderacion' => array('rule' => 'notEmpty'),
	  		'cierre_id' => array('rule' => 'notEmpty'),
	  		'pregunta_id' => array('rule' => 'notEmpty'));
	
	// RELACION PREGS_CIERRE:CIERRE 1:1
	var $belongsTo = array(
			'Cierre' => array(
					'className'     => 'Cierre',
					'foreignKey'    => 'cierre_id',
							),
			
    // RELACION PREGS_CIERRE:PREGUNTA 1:1
			'Pregunta' => array(
					'className'     => 'Pregunta',
					'foreignKey'    => 'pregunta_id',
			)
	);
}
?>
