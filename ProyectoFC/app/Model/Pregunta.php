<?php
class Pregunta extends AppModel {
	var $name = 'Pregunta';
	var $validate = array('nombre' => array('rule' =>'notEmpty'));
    	
	// RELACION PREGUNTA: PREGS_CIERRE 1:N
	var $hasMany = array(
			'PregsCierre' => array(
					'className'     => 'PregsCierre',
					'foreignKey'    => 'pregunta_id',
							)
                    	);

}
?>

