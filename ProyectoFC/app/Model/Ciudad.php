<?php 
class Ciudad extends AppModel { 
    var $name = 'Ciudad'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty'),
    		'provincia_id' => array('rule' => 'notEmpty'));
    // RELACION CIUDAD:PROVINCIA 1:1 
    var $hasOne = array( 
            'Provincia' => array( 
                    'className'     => 'Provincia', 
                    'foreignKey'    => 'provincia_id', 
                            ) 
                        ); 
    //--------------------------------------------------------------------------------
    // RELACION CIUDAD:COMITENTE 1:N
    var $belongsTo = array(
    		'Comitente' => array(
    				'className'     => 'Comitente',
    				'foreignKey'    => 'comitente_id',
    		),
           
    // RELACION CIUDAD:CONTACTO 1:N
    	//var $belongsTo = array(
    		   		'Contacto' => array(
    				'className'     => 'Contacto',
    				'foreignKey'    => 'contacto_id',
    		),
           
    // RELACION CIUDAD:PERSONA 1:N
    	//var $belongsTo = array(
    	    'Persona' => array(
    				'className'     => 'Persona',
    				'foreignKey'    => 'persona_id',
    		)
    );
    }
    ?>