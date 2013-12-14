<?php 
class Cierre extends AppModel { 
    var $name = 'Cierre'; 
     var $validate = array('proyecto_id' => array('rule' => 'notEmpty'), 
     	'motivo_cierre_id' => array('rule' => 'notEmpty'));
        
    // RELACION CIERRE:PROYECTO 1:1 
    var $belongsTo = array( 
            'Proyecto' => array( 
                    'className'     => 'Proyecto', 
                    'foreignKey'    => 'proyecto_id', 
                            ), 
    // RELACION CIERRE:MOTIVOCIERRE 1:N 
            'MotivoCierre' => array( 
                    'className'     => 'MotivoCierre', 
                    'foreignKey'    => 'motivo_cierre_id', 
                            ), 
    		);

    
    //-----------------------------------------------------------------------
    // RELACION CIERRE:PREGUNTACIERRE 1:N
    var $hasMany = array(
    		'Pregcierre' => array(
    				'className'     => 'Pregcierre',
    				'foreignKey'    => 'cierre_id',
    		)
    	);
    }
    ?>