<?php ?>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?= base_url('eventos')?>" class="navbar-brand">Evento Software</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
              <li class="active"><a href="<?= base_url('eventos')?>">Home</a></li>
              <li><a href="<?php echo base_url('eventos/usuarios/index');?>">Listar Usuarios Registrados</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="starter-template">
        <h1>Editar Datos Usuario</h1>
        <div id="conte_formulario">
            <form id="form_registro_edit" role="form" method="post" action="<?php base_url('eventos/usuarios/edit_usuario')?>">

                <!--Cedula-->
              <div class="form-group">
                <label for="cedula_usuario">Cédula</label>
                <input type="text" class="form-control campos" name ="cedula_usuario" id="cedula_usuario"
                       placeholder="Introduce tu cedula" required="" value="<?php echo $datos_usuario[0]->cedula ?> ">
              </div>

              <!--Nombres--> 
              <div class="form-group">
                <label for="nombre_usuario">Nombre</label>
                <input type="text" class="form-control campos" name="nombre_usuario" id="nombre_usuario"
                       placeholder="Introduce tu nombre" required="" value="<?php echo $datos_usuario[0]->nombres_usuario ?> ">
              </div>
                <!--Apellidos-->
              <div class="form-group">
                <label for="apellido_usuario">Apellido</label>
                <input type="text" class="form-control campos"name="apellido_usuario"  id="apellido_usuario"
                       placeholder="Introduce tu apellido" required="" value="<?php echo $datos_usuario[0]->apellidos_usuario ?> " >
              </div>

                <!--Fecha nacimiento--> 
              <div class="form-group">
                <label for="fech_facimiento">Fecha de Nacimiento</label>
                <input type="date" class="datepicker-switch form-control campos" name="fech_facimiento" id="fech_facimiento"
                       placeholder="Introduce tu fecha de nacimiento" required="" value="<?php echo $datos_usuario[0]->fecha_nacimiento ?> " >
              </div>  

              <div class="form-group">
                <label for="email_usuario">Email</label>
                <input type="email" class="form-control campos" name="email_usuario" id="email_usuario"
                       placeholder="Introduce tu email" required="" value="<?php echo $datos_usuario[0]->correo ?> " >
              </div>

              <!--telefonoi-->
              <div class="form-group">
                <label for="tel_usuario">Telefono</label>
                <input type="text" class="datepicker-switch form-control campos" name="tel_usuario" id="tel_usuario"
                       placeholder="Introduce tu numero de telefono" required="" value="<?php echo $datos_usuario[0]->telefono ?> " >
              </div> 

                <!--direccion--> 
              <div class="form-group">
                <label for="direccion_usuario">Dirección</label>
                <input type="text" class="datepicker-switch form-control campos" name="direccion_usuario" id="direccion_usuario"
                       placeholder="Introduce tu direccion" required="" value="<?php echo $datos_usuario[0]->direccion_usuario ?> " >
              </div>

                <!--Tipo pago --> 
              <div class="form-group">
                <label for="tipo_pago">Tipo de Pago</label>
                <select name="tipo_pago" id="tipo_pago" class="form-control">
                    <?php 
                        foreach ($pago as $value) {
                            if($datos_usuario[0]->forma_pago == $value->id){
                                echo "<option value='".$value->id."' selected='' >". $value->nombre_pago  ."</option>";
                            }else{

                                echo "<option value='".$value->id."'>". $value->nombre_pago  ."</option>";
                            }
                        }
                    ?>
                </select>
              </div>

                <!--Ocultos-->
                <div class="form-group">
                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $datos_usuario[0]->id?>">
              </div>
              <button id="btn_editar" type="submit" class="btn btn-default" data-target="resultado">Editar Datos</button>
            </form>
        </div>
        <div id="resultado"></div>
      </div>
        <?php 
//        echo base_url('csclinical/paciente');
//    print_r($evento);
?>
        
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

<div id="SL_shadow_translator"><div id="SL_shadow_balloon" style="display: none; top: -10000px; left: -10000px;"><div id="SLplanshet"><div id="SLarrowTOP"></div><div align="left" id="SLtopbar"><table width="100%" height="25" cellspacing="0" cellpadding="0" border="0" class="SLtable"><tr><td width="15" align="left" class="SLtd"><div id="SLlogo"></div></td><td width="37" valign="center" align="right" class="SLtd"><input type="checkbox" id="SLloc" title="Lock-in language"></td><td width="95" align="left" class="SLtd"><select id="SLfrom" class="SLselectbox"><option value="auto">Detect language</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="zh">Chinese (Simplified)</option><option value="zt">Chinese (Traditional)</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="en">English</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="kn">Kannada</option><option value="ko">Korean</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="mk">Macedonian</option><option value="ms">Malay</option><option value="mt">Maltese</option><option value="no">Norwegian</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sr">Serbian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="es">Spanish</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="ta">Tamil</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="yi">Yiddish</option></select></td><td width="10" valign="center" align="center" class="SLtd"><div id="SL_switch" title=" Switch languages"></div></td><td width="95" valign="center" align="left" class="SLtd"><select id="SLto" class="SLselectbox"><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="zh">Chinese (Simplified)</option><option value="zt">Chinese (Traditional)</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="en">English</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="kn">Kannada</option><option value="ko">Korean</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="mk">Macedonian</option><option value="ms">Malay</option><option value="mt">Maltese</option><option value="no">Norwegian</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sr">Serbian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="es">Spanish</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="ta">Tamil</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="yi">Yiddish</option></select></td><td width="6" align="right" class="SLtd"></td><td width="12" align="right" class="SLtd"><div id="SL_tts" title="Listen to the translation"></div></td><td width="22" align="right" class="SLtd"><div id="SL_copy" title="Copy translation" class="SL_copy"></div></td><td width="22" align="right" class="SLtd"><div id="SL_font" title="Font size" class="SL_font_on"></div></td><td width="25" align="right" class="SLtd"></td><td width="22" align="right" class="SLtd"><div id="SL_pin" title="Pin pop-up bubble" class="SL_pin_off"></div></td></tr></table></div></div><div id="SL_result" class="SL_sesultLTRRTL" style="font-size: 13px; line-height: 18px;"><div style="margin-bottom:0px"></div></div><div id="SLplanshetBottom"><div id="SLDONATE"></div><span id="SL_Goptions">Options</span><span id="SL_dots1">:</span><span id="SL_Ghelp">Help</span><span id="SL_dots2">:</span><span id="SL_Gfeedback">Feedback</span></div><div id="SLarrowBOT"></div></div></div></body>


<script>
$(document).ready(function(){
//    $("#btn_guardar").click(function(){
//        
//        var url = main_path+'eventos/registro/save_register';
//        $.ajax({
//                url: url,//Url a donde enviaremos los datos
//                type: 'POST',// Tipo de envio 
//                dataType: 'html', //Tipo de Respuesta
//                data:$("#form_registro").serialize(), //Serializamos el formulario
//        })
//        .done(function(data) {//Cuando nuestra función finalice, recuperamos la respuesta
//                $("#respuesta").html(data); //Colocamos la respuesta en nuestro espacio maquetado.
//        })
//        return false;
//    });
    var BASE_URL = "<?php echo base_url();?>";
    $("#form_registro_edit").submit(function(event){
       event.preventDefault(); //Evitamos que el evento submit siga en ejecución, evitando que se recargue toda la página
        $.post(BASE_URL+'eventos/usuarios/edit_usuario', //La variable url ha de contener la base_url() de nuestra aplicacion
            $("#form_registro_edit").serialize(), //Codificamos todo el formulario en formato de URL por medio de la receta
        function (data) {
            
//            alert('Resgistro Guardada Exitosamente');
             $("#resultado").html(data);
             if(data == '<br><div class="alert alert-success">La actualización de datos tuvo exito</div>'){
                 setTimeout(function(){
//                   alert('entro alevento de tiempo');
//                   $("#cedula_usuario").removeAttr('value');
//                   $(".campos").val('');
                     $("#conte_formulario").hide();

               },200);
             }
           // c.close();
//                $('div#sending_form').prepend(data); //Añadimos la respuesta AJAX a nuestro div de notificación de respuesta
            }); 
    });
});
</script>