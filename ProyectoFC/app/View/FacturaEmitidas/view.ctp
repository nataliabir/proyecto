<!-- File: /app/View/FacturaEmitida/view.ctp -->

<h1>Datos de la Factura</h1>
<p><?php echo h($facturaemitida['FacturaEmitida']['nro_factura']); ?></p>
<p><?php echo h($facturaemitida['FacturaEmitida']['nro_sucursal']); ?></p>
<p><?php echo h($facturaemitida['FacturaEmitida']['fecha']); ?></p>
<p><?php echo h($facturaemitida['Comitente']['nombre']); ?></p>
<p><?php echo h($facturaemitida['TipoFactura']['nombre']); ?></p>

