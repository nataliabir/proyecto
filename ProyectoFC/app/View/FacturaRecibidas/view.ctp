<!-- File: /app/View/FacturaRecibida/view.ctp -->

<h1>Datos de la Factura</h1>
<p><?php echo h($facturarecibida['FacturaRecibida']['nro_factura']); ?></p>
<p><?php echo h($facturarecibida['FacturaRecibida']['nro_sucursal']); ?></p>
<p><?php echo h($facturarecibida['FacturaRecibida']['fecha']); ?></p>
<p><?php echo h($facturarecibida['Comitente']['nombre']); ?></p>
<p><?php echo h($facturarecibida['TipoFactura']['nombre']); ?></p>