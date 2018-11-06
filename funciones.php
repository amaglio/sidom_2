<?php

function ver_formulario()
{ ?>
 

<div class="form-group" style="padding-top: 10px">
    <label>Dejanos tu consulta</label>
</div>
<form name="form_contacto" id="form_contacto" method="post" action="procesar_contacto.php">
        
    <div class="form-group">
        <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre *">  
    </div>
    
    <div class="form-group">
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido *">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="email" id="email" placeholder="Email *">
    </div>
    
    <div class="form-group">
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
    </div>
    
   

    <div class="form-group">
       <textarea class="form-control" id="consulta" name="consulta" placeholder="Comentario *"></textarea>
    </div>

   <input type="submit" class="btn btn-primary btn-block" name="enviar" id="enviar" value="Enviar">

</form>
<?
}
?>