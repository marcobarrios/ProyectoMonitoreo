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
    <script type="text/javascript" src="controllers/functions.js"></script>
    <script type="text/javascript" src="controllers/geolocalizacion.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
        <h2 id = "header-h1">Instrumento para el Monitoreo y Demanda de servicios de salud sexual y reprodutiva</h2>
        <h2 id = "header-h2">Instrumento de Monitoreo</h2>
    </header>

    <?php if ((($_GET['id']) == "")) { ?>
    <form name="myform" method="post" action="controllers/guardardatos.php">

        <input type="hidden" name="latitud" id="latitud" value="">
        <input type="hidden" name="longitud" id="longitud" value="">
        <input type="hidden" name="altitud" id="altitud" value="">

        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
        <input type="hidden" name="name" id="name" value="<?php echo $_GET['name'] ?>">

        <div id="groupA" name="groupA">
            <h3> A. Información General</h3>

            <div id="div_id_sexo" class="form-group">
                <label class = "pregunta">1. Género<span class="asteriskField">*</span></label>
                <div class="controls">
                        <label><input type="radio" name="sexo" value="1"/> Femenino <br></label>
                        <label><input type="radio" name="sexo" value="2" /> Masculino <br></label>
                </div>
            </div>

            <div id="div_id_rango_edad" class="form-group">
                <label class = "pregunta">2. Rango de Edad<span class="asteriskField">*</span></label>
                <div class="controls">
                        <label><input type="radio" name="rangoedad" value="1"/> 13 a 15 años <br></label>
                        <label><input type="radio" name="rangoedad" value="2"/> 16 a 18 años <br></label>
                        <label><input type="radio" name="rangoedad" value="3"/> 19 a 21 años <br></label>
                        <label><input type="radio" name="rangoedad" value="4"/> 22 a 25 años <br></label>
                        <label><input type="radio" name="rangoedad" value="5"/> Más de 25 años <br></label>
                </div>
            </div>

            <div id="div_id_estado_civil" class="form-group">
                <label class = "pregunta">3. Estado Civil<span class="asteriskField">*</span></label>
                <div class="controls">
                    <label><input type="radio" name="estadocivil" value="1"/> Casado <br></label>
                    <label><input type="radio" name="estadocivil" value="2"/> Soltero <br></label>
                    <label><input type="radio" name="estadocivil" value="3"/> Unido <br></label>
                    <label><input type="radio" name="estadocivil" value="4"/> Divorciado <br></label>
                </div>
            </div>

            <div id="div_id_dedica" class="form-group">
                <label class = "pregunta">4. ¿A qué se dedica actualmente?<span class="asteriskField">*</span></label>
                <div class="controls">
                    <label><input type="radio" name="dedica" value="1"/> Estudia <br></label>
                    <label><input type="radio" name="dedica" value="2"/> Trabaja <br></label>
                    <label><input type="radio" name="dedica" value="3"/> Ambos <br></label>
                    <label><input type="radio" name="dedica" value="4"/> Ninguno <br></label>
                </div>
            </div>

            <div id="div_id_cultura" class="form-group">
                <label class = "pregunta">5. Cultura<span class="asteriskField">*</span></label>
                <div class="controls" onchange="SelectChanged();">
                        <label><input type="radio" name="cultura" value="1"/> Mestizo <br></label>
                        <label><input type="radio" name="cultura" value="2"/> Maya <br></label>
                        <label><input type="radio" name="cultura" value="3"/> Maya Mam <br></label>
                        <label><input type="radio" name="cultura" value="4"/> Maya Kiche <br></label>
                        <label><input type="radio" name="cultura" value="5"/> Maya Chalchiteco <br></label>
                        <label><input type="radio" name="cultura" value="6"/> Maya Ixil <br></label>
                        <label><input type="radio" name="cultura" value="7" /> Maya Aguacateco <br></label>
                        <label><input type="radio" name="cultura" value="8" /> Otro <br></label>
                </div>
            </div>
            <div id="div_id_otra_cultura" class="form-group">
                <label for="id_otra_cultura" class="control-label ">Especifica tu cultura</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_otra_cultura" maxlength="45" name="otra_cultura" type="text">
                </div>
            </div>


        <div id="div_id_situacion_vivienda" class="form-group">
            <label class = "pregunta">6. Situación de Vivienda<span class="asteriskField">*</span></label>
            <div class="controls" onchange="SelectChanged();">
                <label><input type="radio" name="vivienda" value="1"/> Casa Propia <br></label>
                <label><input type="radio" name="vivienda" value="2"/> Alquila <br></label>
                <label><input type="radio" name="vivienda" value="3"/> Vive con sus padres <br></label>
                <label><input type="radio" name="vivienda" value="4"/> Algun Familiar <br></label>
                <label><input type="radio" name="vivienda" value="5"/> Otro <br></label>
            </div>
        </div>
        <div id="div_id_otra_vivienda" class="form-group">
            <label for="id_otra_vivienda" class="control-label ">Especifica Otra Vivienda</label>
            <div class="controls ">
                <input class="textinput textInput form-control" id="id_otra_vivienda" maxlength="45" name="otra_vivienda" type="text">
            </div>
        </div>
        </div>

        <div id="groupB" name="groupB">
            <h3>B. Percepción de Servicios Actuales sobre Derechos Sexuales y Reproductivos</h3>

            <div id="div_id_idservicio_salud" class="form-group">
                <label class = "pregunta">1. Tipo de servicio o establecimiento de salud que usas<span class="asteriskField">*</span>
                </label>
                <div class="controls" onchange="SelectChanged();">
                        <label><input type="radio" name="idservicio_salud" value="1" /> CAP <br></label>
                        <label><input type="radio" name="idservicio_salud" value="2" /> PEC <br></label>
                        <label><input type="radio" name="idservicio_salud" value="3" /> Centro de Salud <br></label>
                        <label><input type="radio" name="idservicio_salud" value="4" /> Espacios Amigables <br></label>
                        <label><input type="radio" name="idservicio_salud" value="5" /> ONG <br></label>
                        <label><input type="radio" name="idservicio_salud" value="6" /> Otros <br></label>
                </div>
            </div>
            <div id="div_id_otro_servicio" class="form-group">
                <label for="id_otro_servicio" class="control-label ">Especifica otro servicio o establecimiento</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_otro_servicio" maxlength="45" name="otro_servicio_salud" type="text">
                </div>
            </div>

            <div id="div_id_veces_visita" class="form-group">
                <label class = "pregunta">2. Las veces que has visitado el centro o puesto de Salud<span class="asteriskField">*</span></label>
                <div class="controls ">
                        <label><input type="radio" name="veces_visita" value="1" /> Primera Vez <br></label>
                        <label><input type="radio" name="veces_visita" value="2" /> Con Regularidad <br></label>
                        <label><input type="radio" name="veces_visita" value="3" /> De Vez en Cuando <br></label>
                </div>
            </div>

            <div id="div_id_motivo_acercamiento" class="form-group">
                <label class = "pregunta">3. ¿Cuál fue el motivo por el que te  acercaste al centro o puesto de salud?</label>
                <div class="controls" onchange="SelectChanged();">
                        <label><input type="radio" name="motivo_acercamiento" value="1" /> Por Planificación Familiar <br></label>
                        <label><input type="radio" name="motivo_acercamiento" value="2" /> Por Información sobre Sexualidad <br></label>
                        <label><input type="radio" name="motivo_acercamiento" value="3" /> Demanda de Condones <br></label>
                        <label><input type="radio" name="motivo_acercamiento" value="4" /> Pruebas de VIH <br></label>
                        <label><input type="radio" name="motivo_acercamiento" value="5" /> Por Riesgo de Abuso Sexual <br></label>
                        <label><input type="radio" name="motivo_acercamiento" value="6" /> Por Alcoholismo o drogas <br></label>
                        <label><input type="radio" name="motivo_acercamiento" value="7" /> Otros <br></label>
                </div>
            </div>
            <div id="div_id_especifica_motivo" class="form-group">
                <label for="id_especifica_motivo" class="control-label ">Especifica otro motivo</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_especifica_motivo" maxlength="45" name="especifica_motivo" type="text">
                </div>
            </div>

            <div id="div_id_personal_capacitado_im" class="form-group">
                <label class = "pregunta">4. ¿Existe  personal capacitado para brindar atención en tu idioma materno?</label>
                <div class="controls ">
                        <label><input type="radio" name="personal_capacitado" value="1" /> Sí <br></label>
                        <label><input type="radio" name="personal_capacitado" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_donde_escucho" class="form-group">
                <label class = "pregunta">5. ¿Dónde escuchaste sobre los Programas de Salud Sexual y Reproductiva y VIH?</label>
                <div class="controls " onchange="SelectChanged();">
                        <label><input type="radio" name="donde_escucho" value="1" /> Medios de Comunicación Local <br></label>
                        <label><input type="radio" name="donde_escucho" value="2" /> Amigos <br></label>
                        <label><input type="radio" name="donde_escucho" value="3" /> Escuelas <br></label>
                        <label><input type="radio" name="donde_escucho" value="4" /> Centro de Salud <br></label>
                        <label><input type="radio" name="donde_escucho" value="5" /> Otros <br></label>
                </div>
            </div>
            <div id="div_id_especifica_escucho" class="form-group">
                <label for="id_especifica_escucho" class="control-label ">Especifica Lugar</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_especifica_escucho" maxlength="45" name="especifica_escucho" type="text">
                </div>
            </div>

            <div id="div_id_consige_condones" class="form-group">
                <label class = "pregunta">6.1 ¿En tu comunidad donde consigues los condones?
                </label>
                <div class="controls " onchange="SelectChanged();">
                        <label><input type="radio" name="consigue_condones" value="1" /> Centro o Puesto de Salud <br></label>
                        <label><input type="radio" name="consigue_condones" value="2" /> ONG <br></label>
                        <label><input type="radio" name="consigue_condones" value="3" /> Farmacia <br></label>
                        <label><input type="radio" name="consigue_condones" value="4" /> Hospital <br></label>
                        <label><input type="radio" name="consigue_condones" value="5" /> Comadronas <br></label>
                        <label><input type="radio" name="consigue_condones" value="6" /> Otros <br></label>
                </div>
            </div>
            <div id="div_id_otro_lugar_condones" class="form-group">
                <label for="id_otro_lugar_condones" class="control-label ">Especifica Lugar</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_otro_lugar_condones" maxlength="45" name="otro_lugar_condones" type="text">
                </div>
            </div>

            <div id="div_id_consigue_pruebas" class="form-group">
                <label class = "pregunta">6.2 ¿En tu comunidad donde consigues las pruebas de embarazo?
                </label>
                <div class="controls ">
                    <label><input type="radio" name="consigue_pruebas" value="1" /> Centro o Puesto de Salud <br></label>
                    <label><input type="radio" name="consigue_pruebas" value="2" /> ONG <br></label>
                    <label><input type="radio" name="consigue_pruebas" value="3" /> Farmacia <br></label>
                    <label><input type="radio" name="consigue_pruebas" value="4" /> Hospital <br></label>
                    <label><input type="radio" name="consigue_pruebas" value="5" /> Comadronas <br></label>
                    <label><input type="radio" name="consigue_pruebas" value="6" /> Otros <br></label>
                </div>
            </div>

            <div id="div_id_consigue_metodos" class="form-group">
                <label class = "pregunta">6.3 ¿En tu comunidad donde consigues Métodos de Planificación Familiar?
                </label>
                <div class="controls ">
                    <label><input type="radio" name="consigue_metodos" value="1" /> Centro o Puesto de Salud <br></label>
                    <label><input type="radio" name="consigue_metodos" value="2" /> ONG <br></label>
                    <label><input type="radio" name="consigue_metodos" value="3" /> Farmacia <br></label>
                    <label><input type="radio" name="consigue_metodos" value="4" /> Hospital <br></label>
                    <label><input type="radio" name="consigue_metodos" value="5" /> Comadronas <br></label>
                    <label><input type="radio" name="consigue_metodos" value="6" /> Otros <br></label>
                </div>
            </div>
        </div>

        <div id="groupC" name="groupC">
            <h3>C. Sobre comportamientos y riesgo sexual</h3>

            <div id="div_id_id_inicio_relacion" class="form-group">
                <label class = "pregunta">1. ¿A qué edad iniciaste tus relaciones sexuales?</label>
                <div class="controls ">
                    <label><input type="radio" name="inicio_relacion" value="1" /> 10 a 15 años <br></label>
                    <label><input type="radio" name="inicio_relacion" value="2" /> 16 a 18 años <br></label>
                    <label><input type="radio" name="inicio_relacion" value="3" /> 19 a 24 años <br></label>
                    <label><input type="radio" name="inicio_relacion" value="4" /> No he tenido relaciones sexuales <br></label>
                </div>
            </div>

            <div id="div_id_relacion_6meses" class="form-group">
                <label class = "pregunta">2. ¿Has tenido relaciones sexuales en los últimos 6 meses?
                </label>
                <div class="controls ">
                        <label><input type="radio" name="relacion_6meses" value="1" /> Si <br></label>
                        <label><input type="radio" name="relacion_6meses" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_estado_relacion" class="form-group">
                <label class = "pregunta">3. ¿En la última relación Sexual que tuviste te encontrabas?</label>
                <div class="controls ">
                    <label><input type="radio" name="estado_relacion" value="1" /> En estado de ebriedad <br></label>
                    <label><input type="radio" name="estado_relacion" value="2" /> Bajo efectos de drogas  <br></label>
                    <label><input type="radio" name="estado_relacion" value="3" /> Violación <br></label>
                </div>
            </div>

            <div id="div_id_quien_relacion" class="form-group">
                <label class = "pregunta">4. ¿Con quién tuviste relaciones sexuales en la última relación sexual?</label>
                <div class="controls ">
                        <label><input type="radio" name="quien_relacion" value="1" /> Novia o Novio <br></label>
                        <label><input type="radio" name="quien_relacion" value="2" /> Amigo o Amiga <br></label>
                        <label><input type="radio" name="quien_relacion" value="3" /> Trabajadora de Sexo <br></label>
                        <label><input type="radio" name="quien_relacion" value="4" /> Persona Desconocida <br></label>
                </div>
            </div>

            <div id="div_id_utilizo_condon" class="form-group">
                <label class = "pregunta">5. ¿Utilizaste condón en tu última relación sexual?</label>
                <div class="controls ">
                    <label><input type="radio" name="utilizo_condon" value="1" /> Si <br></label>
                    <label><input type="radio" name="utilizo_condon" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_sabe_condon" class="form-group">
                <label class = "pregunta">6. ¿Sabes cómo usar un Condón correctamente?</label>
                <div class="controls ">
                    <label><input type="radio" name="sabe_condon" value="1" /> Si <br></label>
                    <label><input type="radio" name="sabe_condon" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_sabe_condon" class="form-group">
                <label class = "pregunta">7. ¿Has requerido una atención del servicio de salud por algunos de los siguientes síntomas? </label>
                    <div class="controls ">
                        <label>Llagas-----</Llagas><input type="radio" name="llagas" value="1" /> Si </label>
                        <label><input type="radio" name="llagas" value="2" /> No <br></label>
                    </div>
                    <div class="controls ">
                        <label>Comezón o picazón en sus genitales----- <input type="radio" name="picazon" value="1" /> Si </label>
                        <label><input type="radio" name="picazon" value="2" /> No <br></label>
                    </div>
                    <div class="controls ">
                        <label>Dolor o ardor al orinar-----<input type="radio" name="dolor" value="1" /> Si </label>
                        <label><input type="radio" name="dolor" value="2" /> No <br></label>
                    </div>
                    <div class="controls ">
                        <label>Materia o Pus en sus Genitales----- <input type="radio" name="materia" value="1" /> Si </label>
                        <label><input type="radio" name="materia" value="2" /> No <br></label>
                    </div>
                    <div class="controls ">
                        <label>Flujo vaginal  espeso o con mal olor----- <input type="radio" name="flujo" value="1" /> Si </label>
                        <label><input type="radio" name="flujo" value="2" /> No <br></label>
                    </div>
                    <div class="controls ">
                        <label>Úlceras en los genitales----- <input type="radio" name="ulcera" value="1" /> Si </label>
                        <label><input type="radio" name="ulcera" value="2" /> No <br></label>
                    </div>
            </div>
            <div id="div_id_servicio_sugerido" class="form-group">
                <label class = "pregunta">8. ¿Qué servicios sugieres que se brinden en el centro salud para buena atención a los adolescentes?</label>
                    <div class="controls " onchange="SelectChanged();">
                        <label><input type="radio" name="servicio_sugerido" value="1" /> Pruebas de VIH <br></label>
                        <label><input type="radio" name="servicio_sugerido" value="2" /> Kit de Emergencia <br></label>
                        <label><input type="radio" name="servicio_sugerido" value="3" /> Espacios Amigables <br></label>
                        <label><input type="radio" name="servicio_sugerido" value="4" /> Métodos de Planificacion Familiar <br></label>
                        <label><input type="radio" name="servicio_sugerido" value="5" /> Condones <br></label>
                        <label><input type="radio" name="servicio_sugerido" value="6" /> Otros <br></label>
                    </div>
            </div>
            <div id="div_otro_servicio_sugerido" class="form-group">
                <label for="id_otro_servicio_sugerido" class="control-label ">Especifica Otro</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="otro_servicio_sugerido" maxlength="45" name="otro_servicio_sugerido" type="text">
                </div>
            </div>
        </div>

        <div id="groupD" name="groupD">
            <h3>D. Prácticas y Costumbres</h3>

            <div id="div_id_quien_debe_utilizar" class="form-group">
                <label class = "pregunta">1. ¿Según la cultura de la comunidad los  condones los deben utilizar?</label>
                <div class="controls ">
                        <label><input type="radio" name="quien_debe_utilizar" value="1" /> Hombres <br></label>
                        <label><input type="radio" name="quien_debe_utilizar" value="2" /> Hombres y Mujeres <br></label>
                        <label><input type="radio" name="quien_debe_utilizar" value="3" /> Trabajadoras del Sexo  <br></label>
                        <label><input type="radio" name="quien_debe_utilizar" value="4" /> Para los de la ciudad <br></label>
                </div>
            </div>

            <div id="div_id_hablar_condon" class="form-group">
                <label class = "pregunta">2. ¿Se puede hablar libremente del uso de condón con tu pareja?<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="hablar_condon" value="1" /> Si <br></label>
                    <label><input type="radio" name="hablar_condon" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_hablar_prueba" class="form-group">
                <label class = "pregunta">3. ¿Se puede hablar libremente sobre hacerse la prueba del VIH con tu pareja?<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="hablar_prueba" value="1" /> Si <br></label>
                    <label><input type="radio" name="hablar_prueba" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_mujer_derecho_relacion" class="form-group">
                <label class = "pregunta">4. En tu opinión ¿consideras que las mujeres tienen derecho a decidir  tener o no una relación sexual?<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="mujer_derecho_relacion" value="1" /> Si <br></label>
                    <label><input type="radio" name="mujer_derecho_relacion" value="2" /> No <br></label>
                </div>
            </div>
            <div id="div_porque_derecho_relacion" class="form-group">
                <label for="id_otra_cultura" class="control-label ">Especifica Por Qué</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="porque_derecho_relacion" maxlength="45" name="porque_derecho_relacion" type="text">
                </div>
            </div>

            <div id="div_id_mujer_derecho_condon" class="form-group">
                <label class = "pregunta">5. En tu opinión ¿las mujeres tienen derecho a decidir usar un condón en las relaciones sexuales?<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="mujer_derecho_condon" value="1" /> Si <br></label>
                    <label><input type="radio" name="mujer_derecho_condon" value="2" /> No <br></label>
                </div>
            </div>
            <div id="div_porque_derecho_condon" class="form-group">
                <label for="id_otra_cultura" class="control-label ">Especifica Por Qué</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="porque_derecho_condon" maxlength="45" name="porque_derecho_condon" type="text">
                </div>
            </div>

            <div id="div_id_por_idioma" class="form-group">
                <label class = "pregunta">6. ¿Cuál es la respuesta de la atención de los servicios de salud en relación a los condones y otros métodos de planificación familiar?<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="por_idioma" value="1" /> Sólo se Proporcionan a mayores de edad <br></label>
                    <label><input type="radio" name="por_idioma" value="2" /> Se debe Firmar un consentimiento <br></label>
                    <label><input type="radio" name="por_idioma" value="3" /> Se debe estar acompañado por un adulto <br></label>
                    <label><input type="radio" name="por_idioma" value="4" /> Otro <br></label>
                </div>
            </div>

        </div>

        <div id="groupE" name="groupE">
            <h3>E. Acceso a información sobre Kit de emergencia</h3>

            <div id="div_id_existe_servicio" class="form-group">
                <label class = "pregunta">1. ¿Existe servicio o atención en el centro o puesto de salud más cercano en caso de abuso sexual?<span class="asteriskField">*</span></label>
                <div class="controls">
                    <label><input type="radio" name="existe_servicio" value="1" /> Si <br></label>
                    <label><input type="radio" name="existe_servicio" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_existe_kit" class="form-group">
                <label class = "pregunta">2. ¿El centro de servicio cuenta con Kit de emergencia?<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="existe_kit" value="1" /> Si <br></label>
                    <label><input type="radio" name="existe_kit" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_prestador_conoce" class="form-group">
                <label class = "pregunta">3. ¿El prestador de servicios sabe sobre el manejo del Kit de emergencia?</label>
                <div class="controls ">
                    <label><input type="radio" name="prestador_conoce" value="1" /> Sí <br></label>
                    <label><input type="radio" name="prestador_conoce" value="2" /> No <br></label>
                </div>
            </div>

        </div>

        <div id="groupF" name="groupF">
            <h3>F. Acceso a Información sobre Kit de Emergencia</h3>
            
            <div id="div_id_califica_servicio" class="form-group">
                <label class = "pregunta">1. ¿Cómo calificas el servicio?</label>
                <div class="controls">
                        <label><input type="radio" name="califica_servicio" value="1" /> Excelente <br></label>
                        <label><input type="radio" name="califica_servicio" value="2" /> Bueno <br></label>
                        <label><input type="radio" name="califica_servicio" value="3" /> Pésimo <br></label>
                        <label><input type="radio" name="califica_servicio" value="4" /> Deficiente <br></label>
                </div>
            </div>

            <div id="div_id_horario_atencion" class="form-group">
                <label class = "pregunta">2. ¿El horario de atención del establecimiento de salud te resulta</label>
                <div class="controls ">
                        <label><input type="radio" name="horario_atencion" value="1" /> Accesible <br></label>
                        <label><input type="radio" name="horario_atencion" value="2" /> Poco Accesible <br></label>
                        <label><input type="radio" name="horario_atencion" value="3" /> Inaccesible <br></label>
                </div>
            </div>
        </div>

        <div class = "btn">
            <input type="submit" onclick="alert('Sus Datos han sido guardados, se le redirigirá a la página de inicio')"/>
        </div>
        
    </form>

    <?php } else { header('Location: index.php'); } ?>

    <footer>
          <img src="images/footer.png" class = "img-footer" />
    </footer>
    
</body>
</html>