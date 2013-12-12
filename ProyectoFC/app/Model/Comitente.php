<?php 
class Comitente extends AppModel { 
    var $name = 'Comitente'; 
    var $validate = array('nombre' => array('rule' => 'notEmpty'),
    		'direccion' => array('rule' => 'notEmpty'), 'tipo_comitente' => array('rule' => 'notEmpty'),
    		'telefono' => array('rule' => 'notEmpty'),
    		'ciudad_id' => array('rule' => 'notEmpty'),
    		'provincia_id' => array('rule' => 'notEmpty'),
    		'categoria_iva_id' => array('rule' => 'notEmpty'));
    // RELACION COMITENTE:CIUDAD 1:1
    var $belongsTo = array(
            'Ciudad' => array( 
                    'className'     => 'Ciudad', 
                    'foreignKey'    => 'ciudad_id', 
                            ), 
   // RELACION COMITENTE:CATEGORIAIVA 1:1
            'CategoriaIva' => array( 
                    'className'     => 'CategoriaIva', 
                    'foreignKey'    => 'categoria_iva_id', 
                            ), 
    // RELACION COMITENTE:tipocomitente 1:1
    		'TipoComitente' => array(
    				'className'     => 'TipoComitente',
    				'foreignKey'    => 'tipo_comitente_id',
    		),
    // RELACION COMITENTE:CIUDAD 1:1
    				'Provincia' => array(
    						'className'     => 'Provincia',
    						'foreignKey'    => 'provincia_id',
    				),
    );
    
    //-----------------------------------------------------------------------
    // RELACION COMITENTE:ACTAACUERDO 1:1
     var $hasMany = array(
    'ActaAcuerdo' => array(
    		'className'     => 'ActaAcuerdo',
    		'foreignKey'    => 'comitente_id',
                ),
 //RELACION COMITENTE:COMITENTEPROYECTO 1:n
    	'ComitentesProyecto' => array(
      				'className'     => 'ComitentesProyecto',
      				'foreignKey'    => 'comitente_id',
     		),

//      // RELACION COMITENTE:CONVENIOESPECIFICO 1:n
     		'ConvenioEspecifico' => array(
     				'className'     => 'ConvenioEspecifico',
     				'foreignKey'    => 'comitente_id',
     		),
     	// RELACION COMITENTE:CONVENIOMARCO 1:1
 		'ConvenioMarco' => array(
    				'className'     => 'ConvenioMarco',
    				'foreignKey'    => 'comitente_id',
    		),

    // RELACION COMITENTE:FACTURAEMITIDAS 1:N
    		'FacturaEmitida' => array(
    				'className'     => 'FacturaEmitida',
    				'foreignKey'    => 'comitente_id',
    		),

	// RELACION COMITENTE:FACTURARECIBIDA 1:N
    		'FacturaRecibida' => array(
    				'className'     => 'FacturaRecibida',
    				'foreignKey'    => 'comitente_id',
    		),
);
     var $hasOne = array(
    // RELACION COMITENTE:REFERENTE 1:1
    		'Referente' => array(
    				'className'     => 'Referente',
    				'foreignKey'    => 'comitente_id',
    		),
     // RELACION COMITENTE:CONTACTO 1:N
     'Contacto' => array(
     		'className'     => 'Contacto',
     		'foreignKey'    => 'comitente_id',
     ),
); 
} 
?>
