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
    var $hasOne = array(
            'Ciudad' => array( 
                    'className'     => 'Ciudad', 
                    'foreignKey'    => 'ciudad_id', 
                            ), 
                
    // RELACION COMITENTE:PROVINCIA 1:1
    //var $hasOne = array(
            'Provincia' => array( 
                    'className'     => 'Provincia', 
                    'foreignKey'    => 'provincia_id', 
                            ), 
 
    // RELACION COMITENTE:CATEGORIAIVA 1:1
 //   var $hasOne = array(
            'CategoriaIva' => array( 
                    'className'     => 'CategoriaIva', 
                    'foreignKey'    => 'categoria_iva_id', 
                            ), 
 
    // RELACION COMITENTE:tipocomitente 1:1
 //   var $hasOne = array(
    		'TipoComitente' => array(
    				'className'     => 'TipoComitente',
    				'foreignKey'    => 'tipo_comitente_id',
    		),
    );
    
    //-----------------------------------------------------------------------
    // RELACION COMITENTE:ACTAACUERDO 1:1
     var $belongsTo = array(
    'ActaAcuerdo' => array(
    		'className'     => 'ActaAcuerdo',
    		'foreignKey'    => 'acta_acuerdo_id',
                ),
   
    
    // RELACION COMITENTE:CONTACTO 1:N
   //  var $belongsTo = array(
    'Contacto' => array(
    		'className'     => 'Contacto',
    		'foreignKey'    => 'Contacto_id',
    ),
    
    
    // RELACION COMITENTE:CONVENIOESPECIFICO 1:1
    //var $belongsTo = array(
    		'ConvenioEspecifico' => array(
    				'className'     => 'ConvenioEspecifico',
    				'foreignKey'    => 'convenio_especifico_id',
    		),

    // RELACION COMITENTE:CONVENIOMARCO 1:1
//    var $belongsTo = array(
    		'ConvenioMarco' => array(
    				'className'     => 'ConvenioMarco',
    				'foreignKey'    => 'convenio_marco_id',
    		),

    // RELACION COMITENTE:FACTURAEMITIDAS 1:N
//    var $belongsTo = array(
    		'FacturaEmitida' => array(
    				'className'     => 'FacturaEmitida',
    				'foreignKey'    => 'factura_emitida_id',
    		),

    		// RELACION COMITENTE:FACTURARECIBIDA 1:N
//    var $belongsTo = array(
    		'FacturaRecibida' => array(
    				'className'     => 'FacturaRecibida',
    				'foreignKey'    => 'factura_recibida_id',
    		),

    // RELACION COMITENTE:PROYECTO 1:N
//    var $belongsTo = array(
    'Proyecto' => array(
    		'className'     => 'Proyecto',
    		'foreignKey'    => 'proyecto_id',
    ),
  
    
    
    // RELACION COMITENTE:PROYTIENECOMIT 1:1
  //  var $belongsTo = array(
    		'Proy_tiene_comit' => array(
    				'className'     => 'Proy_tiene_comit',
    				'foreignKey'    => 'proy_tiene_comit_id',
    		),

    // RELACION COMITENTE:REFERENTE 1:1
//    var $belongsTo = array(
    		'Referente' => array(
    				'className'     => 'Referente',
    				'foreignKey'    => 'referente_id',
    		)
    );
    
    
    
    
      
        
    
    
  } 
?>
