<?php ?>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?= base_url('eventos')?>" class="navbar-brand">Evento Software</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
              <li class="active"><a href="<?= base_url('eventos')?>">Home</a></li>
              <li><a href="<?php echo base_url('eventos/usuarios/index')?>">Listar Usuarios Registrados</a></li>
            <!--<li><a href="#contact">Contact</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="starter-template">
        <h1>Lista de  Usuarios registrados </h1>
       
        <table class="table table-striped" summary="Lista de los usuarios registrados en el evento">
            <caption>Listado Usuarios Registrados</caption>
            <th>Cédula</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Acciones</th>
            <?php 
            $tr ='';
            $td = '';
            foreach ($lista_usuarios as $value) {
                $td.="<td> ".$value->cedula."</td>";
                $td.="<td> ".$value->apellidos_usuario."</td>";
                $td.="<td> ".$value->nombres_usuario."</td>";
                $td.="<td> ".$value->correo."</td>";
                $td.="<td> ".$value->direccion_usuario."</td>";
                $td.="<td> ".$value->telefono."</td>";
                
                $editar = '<a href="'.base_url("eventos/usuarios/edit_usuario_formulario").'/'.$value->id
                        .'"> <i class="glyphicon glyphicon-pencil"> Editar</i></a>';
                
                $eliminar = '<br> <a  href="'.base_url("eventos/usuarios/delete_usuario").'/'.$value->id.'">'
                        .'<i class= "glyphicon glyphicon-trash"/> Eliminar </a>';
                
                $td.="<td> ".$editar.$eliminar
                        
                        ."</td>";
//                $td .= "<td> ".$eliminar
//                        
//                        ."</td>";
                $tr .= "<tr>". $td ."</tr>";
                
                echo $tr;
                $tr ='';
                $td ='';
                
            }
            ?>
            
        </table>
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


