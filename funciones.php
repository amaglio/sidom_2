<?php

function ver_formulario()
{ 

    // Comerntario
    ?>


    <div class="form-group" style="padding-top: 10px">
        <label>Dejanos tu consulta</label>
    </div>
    <form name="form_contacto" id="form_contacto" method="post" action="procesar_contacto.php" enctype="multipart/form-data">

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

    <div  id="div_sumate_sidom">

        <div class="form-group">
            Sumate al equipo SIDOM <input type="checkbox"  name="sumate" id="sumate" value="1">
        </div>

        <div class="form-group" id="div_cv">
            Subí tu CV <input type="file" class="form-control" name="cv" id="cv" placeholder="Ingresa tu CV">
        </div>

    </div>

   <input type="submit" class="btn btn-primary btn-block" name="enviar" id="enviar" value="Enviar">

    </form>
<?
}
?>