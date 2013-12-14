<?php
class Pregunta extends AppModel {
	var $name = 'Pregunta';
	var $validate = array('nombre' => array('rule' =>'notEmpty'));
    	
	// RELACION PREGUNTA: PREGS_CIERRE 1:N
	var $hasMany = array(
			'Pregcierre' => array(
					'className'     => 'Pregcierre',
					'foreignKey'    => 'pregunta_id',
							)
                    	);

}
?>

