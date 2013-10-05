<?php 
class Contacto extends AppModel { 
    var $name = 'Contacto'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty'),
    		'apellido' => array('rule' => 'notEmpty'), 'email' => array('rule' => 'notEmpty'),
    		'telefono' => array('rule' => 'notEmpty'),
    		'comitente_id' => array('rule' => 'notEmpty'),
    		'ciudad_id' => array('rule' => 'notEmpty'),
    		'provinca_id' => array('rule' => 'notEmpty'));    
          
    // RELACION CONTACTO:COMITENTE 1:1
    var $hasOne = array(
    
    		'Comitente' => array(
    				'className'     => 'Comitente',
    				'foreignKey'    => 'comitente_id',
    		),
  
    
    // RELACION CONTACTO:CIUDAD 1:1 
//     var $hasOne = array( 
            'Ciudad' => array( 
                    'className'     => 'Ciudad', 
                    'foreignKey'    => 'ciudad_id', 
                            ), 
 
    // RELACION CONTACTO:PROVINCIA 1:1 
//     var $hasOne = array(
             'Provincia' => array( 
                    'className'     => 'Provincia', 
                    'foreignKey'    => 'provincia_id', 
                            ), 
 
 //--------------------------------------------------------    
    // RELACION CONTACTO:PROYECTO 1:N
    
//     var $belongsTo = array(
    		'Proyecto' => array(
    				'className'     => 'Proyecto',
    				'foreignKey'    => 'proyecto_id',
    		)
    );
    

  } 
?>
