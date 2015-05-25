<!--Created by Marco Barrios on 12/02/2015.-->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name = "viewport" content= "width=device-width, minimum-scale=1, maximum-scale=1"/>
    <title>Instrumento de Monitoreo</title>
    <link rel = "stylesheet" href = "styles/normalize.css"/>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel ="shortcut icon" type = "image/x-icon" href = "images/logo.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="controllers/geolocalizacion.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:700,400' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="controllers/audios.js"></script>
</head>
<body>
<header>
    <h2 id = "header-h1">Instrumento para el Monitoreo y Demanda de Servicios de Salud Sexual y Reprodutiva</h2>
    <h2 id = "header-h2">Instrumento de Monitoreo</h2>
</header>
<form name="myform" method="post" action="controllers/guardardatos.php" id = "myform">
    <input type="hidden" name="latitud" id="latitud" value="">
    <input type="hidden" name="longitud" id="longitud" value="">
    <input type="hidden" name="altitud" id="altitud" value="">

    <div id="groupA" name="groupA">
        <h3> A. Información General</h3>
        <div id="div_id_sexo" class="form-group">
            <label class = "pregunta" onclick="PlaySound('a1')">1. Género.</label>
            <div class="controls">
                <input type="radio" name="sexo" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('a1-1')" onmouseout="StopSound('a1-1')"><input type="radio" name="sexo" value="1"/> Femenino <br></label>
                <label onclick="PlaySound('a1-2')" onmouseout="StopSound('a1-2')"><input type="radio" name="sexo" value="2" /> Masculino <br></label>
            </div>
        </div>

        <div id="div_id_rango_edad" class="form-group">
            <label class = "pregunta" onclick="PlaySound('a2')">2. Rango de Edad.</label>
            <div class="controls">
                <input type="radio" name="rangoedad" value="0" hidden="" checked="true"/>
                <label><input type="radio" name="rangoedad" value="1"/> 10 a 12 años <br></label>
                <label onclick="PlaySound('a2-1')" onmouseout="StopSound('a2-1')"><input type="radio" name="rangoedad" value="1"/> 13 a 15 años <br></label>
                <label onclick="PlaySound('a2-2')" onmouseout="StopSound('a2-2')"><input type="radio" name="rangoedad" value="2"/> 16 a 18 años <br></label>
                <label onclick="PlaySound('a2-3')" onmouseout="StopSound('a2-3')"><input type="radio" name="rangoedad" value="3"/> 19 a 21 años <br></label>
                <label onclick="PlaySound('a2-4')" onmouseout="StopSound('a2-4')"><input type="radio" name="rangoedad" value="4"/> 22 a 25 años <br></label>
                <label onclick="PlaySound('a2-5')" onmouseout="StopSound('a2-5')"><input type="radio" name="rangoedad" value="5"/> Más de 25 años <br></label>
            </div>
        </div>

        <div id="div_id_estado_civil" class="form-group">
            <label class = "pregunta" onclick="PlaySound('a3')" onmouseout="StopSound('a3')">3. Estado Civil.</label>
            <div class="controls">
                <input type="radio" name="estadocivil" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('a3-1')" onmouseout="StopSound('a3-1')"><input type="radio" name="estadocivil" value="1"/> Casado <br></label>
                <label onclick="PlaySound('a3-3')" onmouseout="StopSound('a3-3')"><input type="radio" name="estadocivil" value="2"/> Soltero <br></label>
                <label onclick="PlaySound('a3-2')" onmouseout="StopSound('a3-2')"><input type="radio" name="estadocivil" value="3"/> Unido <br></label>
                <label onclick="PlaySound('a3-4')" onmouseout="StopSound('a3-4')"><input type="radio" name="estadocivil" value="4"/> Divorciado <br></label>
            </div>
        </div>

        <div id="div_id_dedica" class="form-group">
            <label class = "pregunta" onclick="PlaySound('a4')" onmouseout="StopSound('a4')">4. ¿A qué te dedicas actualmente?</label>
            <div class="controls" onchange="SelectChanged();">
                <input type="radio" name="dedica" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('a4-1')" onmouseout="StopSound('a4-1')"><input type="radio" name="dedica" value="1"/> Estudia <br></label>
                <label onclick="PlaySound('a4-2')" onmouseout="StopSound('a4-2')"><input type="radio" name="dedica" value="2"/> Trabaja <br></label>
                <label onclick="PlaySound('a4-3')" onmouseout="StopSound('a4-3')"><input type="radio" name="dedica" value="3"/> Ambos <br></label>
                <label onclick="PlaySound('a4-4')" onmouseout="StopSound('a4-4')"><input type="radio" name="dedica" value="4"/> Ninguno <br></label>
            </div>
        </div>

        <div id="div_id_trabajo" class="form-group">
            <label class = "pregunta">¿En que trabajas?</label>
            <div class="controls" onchange="SelectChanged();">
                <input type="radio" name="optrabajo" value="0" hidden="" checked="true"/>
                <label><input type="radio" name="otrotrabajo" value="1"/> Oficios Domésticos <br></label>
                <label><input type="radio" name="otrotrabajo" value="2"/> Agricultura <br></label>
                <label><input type="radio" name="otrotrabajo" value="3"/> Tejeduría <br></label>
                <label><input type="radio" name="otrotrabajo" value="4"/> Comerciante <br></label>
                <label><input type="radio" name="otrotrabajo" value="5"/> Albañil <br></label>
                <label><input type="radio" name="otrotrabajo" value="6"/> Carpintero <br></label>
                <label><input type="radio" name="otrotrabajo" value="7"/> Maestro <br></label>
                <label><input type="radio" name="otrotrabajo" value="8"/> Zapatero <br></label>
                <label><input type="radio" name="otrotrabajo" value="9"/> Otro <br></label>
            </div>
        </div>

        <div id="div_id_otrotrabajo" class="form-group">
            <label for="id_otrotrabajo" class="control-label ">Especifica Otro Trabajo</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_otro_trabajo" maxlength="45" name="otro_trabajo" type="text" placeholder="Especifique Otro Trabajo">
            </div>
        </div>

        <div id="div_id_cultura" class="form-group">
            <label class = "pregunta" onclick="PlaySound('a5')" onmouseout="StopSound('a5')">5. Cultura.</label>
            <div class="controls" onchange="SelectChanged();">
                <input type="radio" name="cultura" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('a5-1')" onmouseout="StopSound('a5-1')"><input type="radio" name="cultura" value="1"/> Mestizo <br></label>
                <label onclick="PlaySound('a5-2')" onmouseout="StopSound('a5-2')"><input type="radio" name="cultura" value="2"/> Maya <br></label>
                <label onclick="PlaySound('a5-3')" onmouseout="StopSound('a5-3')"><input type="radio" name="cultura" value="3"/> Maya Mam <br></label>
                <label onclick="PlaySound('a5-4')" onmouseout="StopSound('a5-4')"><input type="radio" name="cultura" value="4"/> Maya Kiche <br></label>
                <label onclick="PlaySound('a5-5')" onmouseout="StopSound('a5-5')"><input type="radio" name="cultura" value="5"/> Maya Chalchiteco <br></label>
                <label onclick="PlaySound('a5-6')" onmouseout="StopSound('a5-6')"><input type="radio" name="cultura" value="6"/> Maya Ixil <br></label>
                <label onclick="PlaySound('a5-7')" onmouseout="StopSound('a5-7')"><input type="radio" name="cultura" value="7" /> Maya Aguacateco <br></label>
                <label onclick="PlaySound('a5-8')" onmouseout="StopSound('a5-8')"><input type="radio" name="cultura" value="8" /> Otro <br></label>
            </div>
        </div>
        <div id="div_id_otra_cultura" class="form-group">
            <label for="id_otra_cultura" class="control-label ">Especifica tu cultura</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_otra_cultura" maxlength="45" name="otra_cultura" type="text" placeholder="Especifique cultura">
            </div>
        </div>
    </div>

    <div id="groupB" name="groupB">
        <h3>B. Percepción de Servicios Actuales sobre Derechos Sexuales y Reproductivos</h3>

        <div id="div_id_idservicio_salud" class="form-group">
            <label class = "pregunta" onclick="PlaySound('b1')" onmouseout="StopSound('b1')">1. Tipo de servicio o establecimiento de salud que usas.
            </label>
            <div class="controls" onchange="SelectChanged();">
                <input type="radio" name="idservicio_salud" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('b1-1')" onmouseout="StopSound('b1-1')"><input type="radio" name="idservicio_salud" value="1" /> CAP <br></label>
                <label onclick="PlaySound('b1-2')" onmouseout="StopSound('b1-2')"><input type="radio" name="idservicio_salud" value="2" /> PEC <br></label>
                <label onclick="PlaySound('b1-3')" onmouseout="StopSound('b1-3')"><input type="radio" name="idservicio_salud" value="3" /> Centro de Salud <br></label>
                <label onclick="PlaySound('b1-4')" onmouseout="StopSound('b1-4')"><input type="radio" name="idservicio_salud" value="4" /> Espacios Amigables <br></label>
                <label onclick="PlaySound('b1-5')" onmouseout="StopSound('b1-5')"><input type="radio" name="idservicio_salud" value="5" /> ONG <br></label>
                <label onclick="PlaySound('b1-6')" onmouseout="StopSound('b1-6')"><input type="radio" name="idservicio_salud" value="6" /> Otros <br></label>
            </div>
        </div>
        <div id="div_id_otro_servicio" class="form-group">
            <label for="id_otro_servicio" class="control-label ">Especifica otro servicio o establecimiento</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_otro_servicio" maxlength="45" name="otro_servicio_salud" type="text" placeholder="Especifique Servicio o Establecimiento">
            </div>
        </div>

        <div id="div_id_veces_visita" class="form-group">
            <label class = "pregunta" onclick="PlaySound('b2')" onmouseout="StopSound('b2')">2. Las veces que has visitado el centro o puesto de Salud.</label>
            <div class="controls ">
                <input type="radio" name="veces_visita" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('b2-1')" onmouseout="StopSound('b2-1')"><input type="radio" name="veces_visita" value="1" /> Una Vez <br></label>
                <label onclick="PlaySound('b2-2')" onmouseout="StopSound('b2-2')"><input type="radio" name="veces_visita" value="2" /> Solo en Caso de Emergencia <br></label>
                <label onclick="PlaySound('b2-3')" onmouseout="StopSound('b2-3')"><input type="radio" name="veces_visita" value="3" /> De Vez en Cuando <br></label>
            </div>
        </div>

        <div id="div_id_motivo_acercamiento" class="form-group">
            <label class = "pregunta" onclick="PlaySound('b3')" onmouseout="StopSound('b3')">3. ¿Cuál fue el motivo por el que te  acercaste al centro o puesto de salud?</label>
            <div class="controls" onchange="SelectChanged();">
                <input type="radio" name="motivo_acercamiento" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('b3-1')" onmouseout="StopSound('b3-1')"><input type="radio" name="motivo_acercamiento" value="1" /> Por Planificación Familiar <br></label>
                <label onclick="PlaySound('b3-2')" onmouseout="StopSound('b3-2')"><input type="radio" name="motivo_acercamiento" value="2" /> Por Información sobre Sexualidad <br></label>
                <label onclick="PlaySound('b3-3')" onmouseout="StopSound('b3-3')"><input type="radio" name="motivo_acercamiento" value="3" /> Demanda de Condones <br></label>
                <label onclick="PlaySound('b3-4')" onmouseout="StopSound('b3-4')"><input type="radio" name="motivo_acercamiento" value="4" /> Pruebas de VIH <br></label>
                <label onclick="PlaySound('b3-5')" onmouseout="StopSound('b3-5')"><input type="radio" name="motivo_acercamiento" value="5" /> Por Riesgo de Abuso Sexual <br></label>
                <label onclick="PlaySound('b3-6')" onmouseout="StopSound('b3-6')"><input type="radio" name="motivo_acercamiento" value="6" /> Por Alcoholismo o drogas <br></label>
                <label onclick="PlaySound('b3-7')" onmouseout="StopSound('b3-7')"><input type="radio" name="motivo_acercamiento" value="7" /> Otros <br></label>
            </div>
        </div>
        <div id="div_id_especifica_motivo" class="form-group">
            <label for="id_especifica_motivo" class="control-label ">Especifica otro motivo</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_especifica_motivo" maxlength="45" name="especifica_motivo" type="text" placeholder="Especifique Motivo">
            </div>
        </div>

        <div id="div_id_personal_capacitado_im" class="form-group">
            <label class = "pregunta" onclick="PlaySound('b4')" onmouseout="StopSound('b4')">4. ¿Existe  personal capacitado para brindar atención en tu idioma materno?</label>
            <div class="controls ">
                <input type="radio" name="personal_capacitado" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('b4-1')" onmouseout="StopSound('b4-1')"><input type="radio" name="personal_capacitado" value="1" /> Sí <br></label>
                <label onclick="PlaySound('b4-2')" onmouseout="StopSound('b4-2')"><input type="radio" name="personal_capacitado" value="2" /> No <br></label>
            </div>
        </div>
        <div id="div_id_donde_escucho" class="form-group">
            <label class = "pregunta" onclick="PlaySound('b5')" onmouseout="StopSound('b5')">5. ¿Dónde escuchaste sobre los Programas de Salud Sexual y Reproductiva y VIH?</label>
            <div class="controls " onchange="SelectChanged();">
                <input type="radio" name="donde_escucho" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('b5-1')" onmouseout="StopSound('b5-1')"><input type="radio" name="donde_escucho" value="1" /> Medios de Comunicación Local <br></label>
                <label onclick="PlaySound('b5-2')" onmouseout="StopSound('b5-2')"><input type="radio" name="donde_escucho" value="2" /> Amigos <br></label>
                <label onclick="PlaySound('b5-3')" onmouseout="StopSound('b5-3')"><input type="radio" name="donde_escucho" value="3" /> Escuelas <br></label>
                <label onclick="PlaySound('b5-4')" onmouseout="StopSound('b5-4')"><input type="radio" name="donde_escucho" value="4" /> Centro de Salud <br></label>
                <label onclick="PlaySound('b5-5')" onmouseout="StopSound('b5-5')"><input type="radio" name="donde_escucho" value="5" /> Otros <br></label>
            </div>
        </div>
        <div id="div_id_especifica_escucho" class="form-group">
            <label for="id_especifica_escucho" class="control-label ">Especifica Lugar</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_especifica_escucho" maxlength="45" name="especifica_escucho" type="text" placeholder="Especifique Lugar">
            </div>
        </div>
        <div id="div_id_consige_condones" class="form-group">
            <label class = "pregunta" onclick="PlaySound('b6')" onmouseout="StopSound('b6')">6.1 ¿En tu comunidad donde consigues los condones?
            </label>
            <div class="controls " onchange="SelectChanged();">
                <input type="radio" name="consigue_condones" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('b6-2')" onmouseout="StopSound('b6-2')"><input type="radio" name="consigue_condones" value="1" /> Centro o Puesto de Salud <br></label>
                <label onclick="PlaySound('b6-3')" onmouseout="StopSound('b6-3')"><input type="radio" name="consigue_condones" value="2" /> ONG <br></label>
                <label onclick="PlaySound('b6-4')" onmouseout="StopSound('b6-4')"><input type="radio" name="consigue_condones" value="3" /> Farmacia <br></label>
                <label onclick="PlaySound('b6-5')" onmouseout="StopSound('b6-5')"><input type="radio" name="consigue_condones" value="4" /> Hospital <br></label>
                <label onclick="PlaySound('b6-6')" onmouseout="StopSound('b6-6')"><input type="radio" name="consigue_condones" value="5" /> Comadronas <br></label>
                <label onclick="PlaySound('b6-7')" onmouseout="StopSound('b6-7')"><input type="radio" name="consigue_condones" value="6" /> Otros <br></label>
                <label><input type="radio" name="consigue_condones" value="7" /> En Ningún Lugar <br></label>
            </div>
        </div>
        <div id="div_id_otro_lugar_condones" class="form-group">
            <label for="id_otro_lugar_condones" class="control-label ">Especifica Lugar</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_otro_lugar_condones" maxlength="45" name="otro_lugar_condones" type="text" placeholder="Especifique Lugar">
            </div>
        </div>

        <div id="div_id_consigue_metodos" class="form-group">
            <label class = "pregunta" onclick="PlaySound('b8')" onmouseout="StopSound('b8')">6.2 ¿En tu comunidad donde consigues Métodos de Planificación Familiar?
            </label>
            <div class="controls " onchange="SelectChanged();">
                <input type="radio" name="consigue_metodos" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('b8-1')" onmouseout="StopSound('b8-1')"><input type="radio" name="consigue_metodos" value="1" /> Centro o Puesto de Salud <br></label>
                <label onclick="PlaySound('b8-2')" onmouseout="StopSound('b8-2')"><input type="radio" name="consigue_metodos" value="2" /> ONG <br></label>
                <label onclick="PlaySound('b8-3')" onmouseout="StopSound('b8-3')"><input type="radio" name="consigue_metodos" value="3" /> Farmacia <br></label>
                <label onclick="PlaySound('b8-4')" onmouseout="StopSound('b8-4')"><input type="radio" name="consigue_metodos" value="4" /> Hospital <br></label>
                <label onclick="PlaySound('b8-5')" onmouseout="StopSound('b8-5')"><input type="radio" name="consigue_metodos" value="5" /> Comadronas <br></label>
                <label onclick="PlaySound('b8-6')" onmouseout="StopSound('b8-6')"><input type="radio" name="consigue_metodos" value="6" /> Otros <br></label>
                <label><input type="radio" name="consigue_metodos" value="7" /> En Ningun Lugar <br></label>
            </div>
        </div>

        <div id="div_id_otro_lugar_metodos" class="form-group">
            <label for="id_otro_lugar_metodos" class="control-label ">Especifica Lugar</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_otro_lugar_metodos" maxlength="45" name="id_otro_lugar_metodos" type="text" placeholder="Especifique Lugar">
            </div>
        </div>
    </div>

    <div id="groupC" name="groupC">
        <h3>C. Sobre comportamientos y riesgo sexual</h3>
        <div id="div_id_id_inicio_relacion" class="form-group">
            <label class = "pregunta" onclick="PlaySound('c1')" onmouseout="StopSound('c1')">1. ¿A qué edad iniciaste tus relaciones sexuales?</label>
            <div class="controls " onchange="SelectChanged();">
                <input type="radio" name="inicio_relacion" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('c1-1')" onmouseout="StopSound('c1-1')"><input type="radio" name="inicio_relacion" value="1" /> 10 a 15 años <br></label>
                <label onclick="PlaySound('c1-2')" onmouseout="StopSound('c1-2')"><input type="radio" name="inicio_relacion" value="2" /> 16 a 18 años <br></label>
                <label onclick="PlaySound('c1-3')" onmouseout="StopSound('c1-3')"><input type="radio" name="inicio_relacion" value="3" /> 19 a 24 años <br></label>
                <label onclick="PlaySound('c1-4')" onmouseout="StopSound('c1-4')"><input type="radio" name="inicio_relacion" value="4" /> No he tenido relaciones sexuales <br></label>
            </div>
        </div>

        <div id="div_id_frecuenciarelacion" class="form-group">
            <label class = "pregunta">2. ¿Con qué frecuencia tienes relaciones sexueales?
            </label>
            <div class="controls ">
                <input type="radio" name="relacion_6meses" value="0" hidden="" checked="true"/>
                <label><input type="radio" name="frecuenciarelaciones" value="1" /> Siempre <br></label>
                <label><input type="radio" name="frecuenciarelaciones" value="2" /> De Vez en Cuando <br></label>
                <label><input type="radio" name="frecuenciarelaciones" value="3" /> Solo Una Vez <br></label>
            </div>
        </div>

        <div id="div_id_estado_relacion" class="form-group">
            <label class = "pregunta" onclick="PlaySound('c3')" onmouseout="StopSound('c3')">3. ¿En la última relación Sexual que tuviste te encontrabas?</label>
            <div class="controls ">
                <input type="radio" name="estado_relacion" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('c3-1')" onmouseout="StopSound('c3-1')"><input type="radio" name="estado_relacion" value="1" /> En estado de ebriedad <br></label>
                <label onclick="PlaySound('c3-2')" onmouseout="StopSound('c3-2')"><input type="radio" name="estado_relacion" value="2" /> Bajo efectos de drogas  <br></label>
                <label onclick="PlaySound('c3-3')" onmouseout="StopSound('c3-3')"><input type="radio" name="estado_relacion" value="3" /> Fuiste abusada(o) sexualmente <br></label>
                <label><input type="radio" name="estado_relacion" value="4" /> Fue de forma consensuada <br></label>
            </div>
        </div>

        <div id="div_id_quien_relacion" class="form-group">
            <label class = "pregunta" onclick="PlaySound('c4')" onmouseout="StopSound('c4')">4. ¿Con quién tuviste relaciones sexuales la última vez?</label>
            <div class="controls ">
                <input type="radio" name="quien_relacion" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('c4-1')" onmouseout="StopSound('c4-1')"><input type="radio" name="quien_relacion" value="1" /> Novia o Novio <br></label>
                <label onclick="PlaySound('c4-2')" onmouseout="StopSound('c4-2')"><input type="radio" name="quien_relacion" value="2" /> Amigo o Amiga <br></label>
                <label onclick="PlaySound('c4-3')" onmouseout="StopSound('c4-3')"><input type="radio" name="quien_relacion" value="3" /> Trabajadora de Sexo <br></label>
                <label onclick="PlaySound('c4-4')" onmouseout="StopSound('c4-4')"><input type="radio" name="quien_relacion" value="4" /> Persona Desconocida <br></label>
            </div>
        </div>

        <div id="div_id_utilizo_condon" class="form-group">
            <label class = "pregunta" onclick="PlaySound('c5')" onmouseout="StopSound('c5')">5. ¿Utilizaste condón en tu última relación sexual?</label>
            <div class="controls ">
                <input type="radio" name="utilizo_condon" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('c5-1')" onmouseout="StopSound('c5-1')"><input type="radio" name="utilizo_condon" value="1" /> Si <br></label>
                <label onclick="PlaySound('c5-2')" onmouseout="StopSound('c5-2')"><input type="radio" name="utilizo_condon" value="2" /> No <br></label>
            </div>
        </div>

        <div id="div_id_sabe_condon" class="form-group">
            <label class = "pregunta" onclick="PlaySound('c6')" onmouseout="StopSound('c6')">6. ¿Sabes cómo usar un Condón correctamente?</label>
            <div class="controls " onchange="SelectChanged();">
                <input type="radio" name="sabe_condon" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('c6-1')" onmouseout="StopSound('c6-1')"><input type="radio" name="sabe_condon" value="1" /> Si <br></label>
                <label onclick="PlaySound('c6-2')" onmouseout="StopSound('c6-2')"><input type="radio" name="sabe_condon" value="2" /> No <br></label>
            </div>
        </div>

        <div id="div_id_servicio_sugerido" class="form-group">
            <label class = "pregunta" onclick="PlaySound('c8')" onmouseout="StopSound('c8')">7. ¿Qué servicios sugieres que se brinden en el centro salud para buena atención a los adolescentes?</label>
            <div class="controls " onchange="SelectChanged();">
                <input type="radio" name="servicio_sugerido" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('c8-1')" onmouseout="StopSound('c8-1')"><input type="radio" name="servicio_sugerido" value="1" /> Pruebas de VIH <br></label>
                <label onclick="PlaySound('c8-2')" onmouseout="StopSound('c8-2')"><input type="radio" name="servicio_sugerido" value="2" /> Kit de Emergencia <br></label>
                <label onclick="PlaySound('c8-3')" onmouseout="StopSound('c8-3')"><input type="radio" name="servicio_sugerido" value="3" /> Espacios Amigables <br></label>
                <label onclick="PlaySound('c8-4')" onmouseout="StopSound('c8-4')"><input type="radio" name="servicio_sugerido" value="4" /> Métodos de Planificacion Familiar <br></label>
                <label onclick="PlaySound('c8-5')" onmouseout="StopSound('c8-5')"><input type="radio" name="servicio_sugerido" value="5" /> Condones <br></label>
                <label onclick="PlaySound('c8-6')" onmouseout="StopSound('c8-6')"><input type="radio" name="servicio_sugerido" value="6" /> Otros <br></label>
            </div>
        </div>
        <div id="div_otro_servicio_sugerido" class="form-group">
            <label for="id_otro_servicio_sugerido" class="control-label ">Especifica Otro</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="otro_servicio_sugerido" maxlength="45" name="otro_servicio_sugerido" type="text" placeholder="Especifique Otro">
            </div>
        </div>
    </div>

    <div id="groupD" name="groupD">
        <h3>D. Prácticas y Costumbres</h3>

        <div id="div_id_quien_debe_utilizar" class="form-group">
            <label class = "pregunta" onclick="PlaySound('d1')" onmouseout="StopSound('d1')">1. ¿Según la cultura de la comunidad los  condones los deben utilizar?</label>
            <div class="controls">
                <input type="radio" name="quien_debe_utilizar" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('d1-1')" onmouseout="StopSound('d1-1')"><input type="radio" name="quien_debe_utilizar" value="1" /> Hombres <br></label>
                <label onclick="PlaySound('d1-2')" onmouseout="StopSound('d1-2')"><input type="radio" name="quien_debe_utilizar" value="2" /> Hombres y Mujeres <br></label>
                <label onclick="PlaySound('d1-3')" onmouseout="StopSound('d1-3')"><input type="radio" name="quien_debe_utilizar" value="3" /> Trabajadoras del Sexo  <br></label>
                <label onclick="PlaySound('d1-4')" onmouseout="StopSound('d1-4')"><input type="radio" name="quien_debe_utilizar" value="4" /> Para los de la ciudad <br></label>
            </div>
        </div>

        <div id="div_id_hablarcondonpareja" class="form-group">
            <label class = "pregunta">2. ¿Puedes  hablar libremente del uso del condón con tu pareja?</label>
            <div class="controls">
                <input type="radio" name="hablarcondonpareja" value="0" hidden="" checked="true"/>
                <label><input type="radio" name="hablarcondonpareja" value="1" /> Sí <br></label>
                <label><input type="radio" name="hablarcondonpareja" value="2" /> No <br></label>
            </div>
        </div>

        <div id="div_id_mujer_derecho_relacion" class="form-group">
            <label class = "pregunta" onclick="PlaySound('d4')" onmouseout="StopSound('d4')">3. En tu opinión ¿consideras que las mujeres tienen derecho a decidir  tener o no una relación sexual?</label>
            <div class="controls ">
                <input type="radio" name="mujer_derecho_relacion" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('d4-1')" onmouseout="StopSound('d4-1')"><input type="radio" name="mujer_derecho_relacion" value="1" /> Si <br></label>
                <label onclick="PlaySound('d4-2')" onmouseout="StopSound('d4-2')"><input type="radio" name="mujer_derecho_relacion" value="2" /> No <br></label>
            </div>
        </div>
        <div id="div_porque_derecho_relacion" class="form-group">
            <label for="id_otra_cultura" class="control-label " onclick="PlaySound('d4-3')" onmouseout="StopSound('d4-3')">Especifica Por Qué</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="porque_derecho_relacion" maxlength="45" name="porque_derecho_relacion" type="text">
            </div>
        </div>

        <div id="div_id_mujer_derecho_condon" class="form-group">
            <label class = "pregunta" onclick="PlaySound('d5')" onmouseout="StopSound('d5')">4. En tu opinión ¿las mujeres tienen derecho a decidir usar un condón en las relaciones sexuales?</label>
            <div class="controls ">
                <input type="radio" name="mujer_derecho_condon" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('d5-1')" onmouseout="StopSound('d5-1')"><input type="radio" name="mujer_derecho_condon" value="1" /> Si <br></label>
                <label onclick="PlaySound('d5-2')" onmouseout="StopSound('d5-2')"><input type="radio" name="mujer_derecho_condon" value="2" /> No <br></label>
            </div>
        </div>
        <div id="div_porque_derecho_condon" class="form-group">
            <label for="id_otra_cultura" class="control-label " onclick="PlaySound('d5-3')" onmouseout="StopSound('d5-3')">Especifica Por Qué</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="porque_derecho_condon" maxlength="45" name="porque_derecho_condon" type="text">
            </div>
        </div>

        <div id="div_id_por_idioma" class="form-group">
            <label class = "pregunta" onclick="PlaySound('d6')" onmouseout="StopSound('d6')">5. ¿Cuál es la respuesta de la atención de los servicios de salud en relación a los condones y otros métodos de planificación familiar?</label>
            <div class="controls " onchange="SelectChanged();">
                <input type="radio" name="por_idioma" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('d6-1')" onmouseout="StopSound('d6-1')"><input type="radio" name="por_idioma" value="1" /> Sólo se Proporcionan a mayores de edad <br></label>
                <label onclick="PlaySound('d6-2')" onmouseout="StopSound('d6-2')"><input type="radio" name="por_idioma" value="2" /> Se debe Firmar un consentimiento <br></label>
                <label onclick="PlaySound('d6-3')" onmouseout="StopSound('d6-3')"><input type="radio" name="por_idioma" value="3" /> Se debe estar acompañado por un adulto <br></label>
                <label onclick="PlaySound('d6-4')" onmouseout="StopSound('d6-4')"><input type="radio" name="por_idioma" value="4" /> Otro <br></label>
            </div>
        </div>
        <div id="div_id_otra_razon" class="form-group">
            <label for="id_otra_razon" class="control-label ">Especifica Otra Razon</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_otra_razon" maxlength="45" name="id_otra_razon" type="text" placeholder="Especifique Otra Razon">
            </div>
        </div>
    </div>

    <div id="groupE" name="groupE">
        <h3>E. Acceso a información sobre Kit de emergencia</h3>

        <div id="div_id_existe_servicio" class="form-group">
            <label class = "pregunta" onclick="PlaySound('e1')" onmouseout="StopSound('e1')">1. ¿Existe servicio o atención en el centro o puesto de salud más cercano en caso de abuso sexual?</label>
            <div class="controls">
                <input type="radio" name="existe_servicio" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('e1-1')" onmouseout="StopSound('e1-1')"><input type="radio" name="existe_servicio" value="1" /> Si <br></label>
                <label onclick="PlaySound('e1-2')" onmouseout="StopSound('e1-2')"><input type="radio" name="existe_servicio" value="2" /> No <br></label>
            </div>
        </div>

        <div id="div_id_existe_kit" class="form-group">
            <label class = "pregunta" onclick="PlaySound('e2')" onmouseout="StopSound('e2')">2. ¿Sabes si el centro de servicio cuenta con Kit de Emergencia?</label>
            <div class="controls ">
                <input type="radio" name="existe_kit" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('e2-1')" onmouseout="StopSound('e2-1')"><input type="radio" name="existe_kit" value="1" /> Si <br></label>
                <label onclick="PlaySound('e2-2')" onmouseout="StopSound('e2-2')"><input type="radio" name="existe_kit" value="2" /> No <br></label>
            </div>
        </div>

        <div id="div_id_prestador_conoce" class="form-group">
            <label class = "pregunta" onclick="PlaySound('e3')" onmouseout="StopSound('e3')">3. ¿El prestador de servicios sabe sobre el manejo del Kit de emergencia?</label>
            <div class="controls ">
                <input type="radio" name="prestador_conoce" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('e3-1')" onmouseout="StopSound('e3-1')"><input type="radio" name="prestador_conoce" value="1" /> Sí <br></label>
                <label onclick="PlaySound('e3-2')" onmouseout="StopSound('e3-2')"><input type="radio" name="prestador_conoce" value="2" /> No <br></label>
            </div>
        </div>

    </div>

    <div id="groupF" name="groupF">
        <h3>F. Acceso a Información sobre Kit de Emergencia</h3>

        <div id="div_id_califica_servicio" class="form-group">
            <label class = "pregunta" onclick="PlaySound('f1')" onmouseout="StopSound('f1')">1. ¿Cómo calificas el servicio?</label>
            <div class="controls">
                <input type="radio" name="califica_servicio" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('f1-1')" onmouseout="StopSound('f1-1')"><input type="radio" name="califica_servicio" value="1" /> Excelente <br></label>
                <label onclick="PlaySound('f1-2')" onmouseout="StopSound('f1-2')"><input type="radio" name="califica_servicio" value="2" /> Bueno <br></label>
                <label onclick="PlaySound('f1-3')" onmouseout="StopSound('f1-3')"><input type="radio" name="califica_servicio" value="3" /> Pésimo <br></label>
                <label onclick="PlaySound('f1-4')" onmouseout="StopSound('f1-4')"><input type="radio" name="califica_servicio" value="4" /> Deficiente <br></label>
            </div>
        </div>

        <div id="div_id_horario_atencion" class="form-group">
            <label class = "pregunta" onclick="PlaySound('f2')" onmouseout="StopSound('f2')">2. ¿El horario de atención del establecimiento de salud te resulta?</label>
            <div class="controls ">
                <input type="radio" name="horario_atencion" value="0" hidden="" checked="true"/>
                <label onclick="PlaySound('f2-1')" onmouseout="StopSound('f2-1')"><input type="radio" name="horario_atencion" value="1" /> Accesible <br></label>
                <label onclick="PlaySound('f2-2')" onmouseout="StopSound('f2-2')"><input type="radio" name="horario_atencion" value="2" /> Poco Accesible <br></label>
                <label onclick="PlaySound('f2-3')" onmouseout="StopSound('f2-3')"><input type="radio" name="horario_atencion" value="3" /> Inaccesible <br></label>
            </div>
        </div>
    </div>

    <div class = "btn">
        <input type="submit" value="Guardar Respuestas" onclick="alert('Sus respuestas está siendo guardadas\nSe le redirigirá a la página de inicio')"/>
    </div>

</form>

<footer>
    <img src="images/footer.png" class = "img-footer" />
</footer>

<?php
$idioma = $_GET['idiomas'];
if($idioma == "ni")
{
}
elseif($idioma == "espaniol")
{
    include("audios/audios.php");
    var1($idioma);
}
elseif($idioma == "aguacateco")
{
    include("audios/audios.php");
    var1($idioma);
}
elseif($idioma == "ixil")
{
    include("audios/audios.php");
    var1($idioma);
}
elseif($idioma == "mam")
{
    include("audios/audios.php");
    var1($idioma);
}

?>

<script type="text/javascript" src="controllers/functions.js"></script>
</body>
</html>
