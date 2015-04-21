<!--Created by Marco Barrios on 12/02/2015.-->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name = "viewport" content= "width=device-width, minimum-scale=1, maximum-scale=1"/>
    <title>Monitoreo</title>
    <link rel = "stylesheet" href = "styles/normalize.css"/>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel ="shortcut icon" type = "image/x-icon" href = "images/logo.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="controllers/functions.js"></script>
    <script type="text/javascript" src="controllers/geolocalizacion.js"></script>
</head>
<body>
    <header>
        <figure id = "logo">
            <img src="images/logo.png"/>
        </figure>
        <h2 id = "header-h1">Instrumento para evaluar la oferta y demanda de servicios de calidad en materia de derechos sexuales y reproductivos para adolescentes y jóvenes en centros de salud.</h2>
        <h2 id = "header-h2">Instrumento de Monitoreo</h2>
    </header>

    <?php if ((($_GET['id']) != "")) { ?>
    <form name="myform" method="post" action="controllers/guardardatos.php">

        <input type="hidden" name="latitud" id="latitud" value="">
        <input type="hidden" name="longitud" id="longitud" value="">
        <input type="hidden" name="altitud" id="altitud" value="">

        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
        <input type="hidden" name="name" id="name" value="<?php echo $_GET['name'] ?>">

        <div id="groupA" name="groupA">
            <h3><span><img src="images/logo.png" width="50px"></span> A. Información General</h3>

            <div id="div_id_sexo" class="form-group">
                <label>1. Sexo<span class="asteriskField">*</span></label>
                <div class="controls">
                        <label><input type="radio" name="sexo" value="1"/> Femenino <br></label>
                        <label><input type="radio" name="sexo" value="2" /> No Masculino <br></label>
                </div>
            </div>

            <div id="div_id_rango_edad" class="form-group">
                <label>2. Rango de Edad<span class="asteriskField">*</span></label>
                <div class="controls">
                        <label><input type="radio" name="rangoedad" value="1"/> 13 a 15 años <br></label>
                        <label><input type="radio" name="rangoedad" value="2"/> 16 a 18 años <br></label>
                        <label><input type="radio" name="rangoedad" value="3"/> 19 a 21 años <br></label>
                        <label><input type="radio" name="rangoedad" value="4"/> 22 a 25 años <br></label>
                        <label><input type="radio" name="rangoedad" value="5"/> Más de 25 años <br></label>
                </div>
            </div>

            <div id="div_id_cultura" class="form-group">
                <label>3. Cultura<span class="asteriskField">*</span></label>
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
        </div>

        <div id="groupB" name="groupB">
            <h3><span><img src="images/logo.png" width="50px"></span> B. Información del Centro a Monitorear</h3>

            <div id="div_id_idservicio_salud" class="form-group">
                <label>1. Tipo de servicio o establecimiento de salud que usas<span class="asteriskField">*</span>
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

            <div id="div_id_idubicacion_servicio" class="form-group">
                <label>2. Ubicacion del establecimiento de salud<span class="asteriskField">*</span></label>
                <div class="controls ">
                        <label><input type="radio" name="idubicacion_servicio" value="1" /> Cabecera <br></label>
                        <label><input type="radio" name="idubicacion_servicio" value="2" /> Comunidad <br></label>
                </div>
            </div>

            <div id="div_id_tiempo_servicio" class="form-group">
                <label>3. ¿A qué distancia de tu casa se ubica el centro o puesto de salud más cercano?</label>
                <div class="controls" onchange="SelectChanged();">
                        <label><input type="radio" name="tiempo_servicio" value="1" /> Menos de 15 minutos <br></label>
                        <label><input type="radio" name="tiempo_servicio" value="2" /> Entre 15 minutos a 30 minutos <br></label>
                        <label><input type="radio" name="tiempo_servicio" value="3" /> Entre 20 minutos a 1 hora <br></label>
                        <label><input type="radio" name="tiempo_servicio" value="4" /> Más de una hora <br></label>
                </div>
            </div>
            <div id="div_id_especifica_tiempo" class="form-group">
                <label for="id_especifica_tiempo" class="control-label ">Especifica distancia en horas</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_especifica_tiempo" maxlength="45" name="especifica_tiempo" type="text">
                </div>
            </div>

            <div id="div_id_personal_capacitado_im" class="form-group">
                <label>4. ¿Existe &nbsp;personal capacitado para brindar atencion en tu idioma materno?</label>
                <div class="controls ">
                        <label><input type="radio" name="personal_capacitado_im" value="1" /> Sí <br></label>
                        <label><input type="radio" name="personal_capacitado_im" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_sala_equipada" class="form-group">
                <label>5. La sala de espera se encuentra equipada con mobiliario suficiente para las personas que esperan la atencion
                </label>
                <div class="controls ">
                        <label><input type="radio" name="sala_equipada" value="2" /> Sí <br></label>
                        <label><input type="radio" name="sala_equipada" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_hay_carteles" class="form-group">
                <label>6. Existen carteles o señalizaciones en cada uno de los ambientes del centro o puesto de salud.
                </label>
                <div class="controls ">
                        <label><input type="radio" name="hay_carteles" value="1" /> Sí <br></label>
                        <label><input type="radio" name="hay_carteles" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_carteles_im" class="form-group">
                <label>7. La informacion de los carteles o señalizaciones está escrita en el idioma materno.
                </label>
                <div class="controls ">
                        <label><input type="radio" name="carteles_im" value="1" /> Sí <br></label>
                        <label><input type="radio" name="carteles_im" value="2" /> No <br></label>
                </div>
            </div>
        </div>

        <div id="groupC" name="groupC">
            <h3><span><img src="images/logo.png" width="50px"></span> C. Reportes sobre la atención recibida en el establecimiento de salud</h3>

            <div id="div_id_id_motivo_acercamiento" class="form-group">
                <label>1. ¿Cual fue el motivo de tu acercamiento al centro de servicio?
                </label>
                <div class="controls ">
                        <label><input type="radio" name="id_motivo_acercamiento" value="1" /> Por planificación familiar <br></label>
                        <label><input type="radio" name="id_motivo_acercamiento" value="2" /> Por información sobre sexualidad <br></label>
                        <label><input type="radio" name="id_motivo_acercamiento" value="3" /> Demanda de condones <br></label>
                        <label><input type="radio" name="id_motivo_acercamiento" value="4" /> Por riesgo de un abuso sexual <br></label>
                </div>
            </div>

            <div id="div_id_id_tiempo_espera" class="form-group">
                <label>2. ¿El tiempo de espera para ser atendido en el establecimiento de salud te parece?</label>
                <div class="controls ">
                        <label><input type="radio" name="id_tiempo_espera" value="1" /> Aceptable <br></label>
                        <label><input type="radio" name="id_tiempo_espera" value="2" /> Poco aceptable <br></label>
                        <label><input type="radio" name="id_tiempo_espera" value="3" /> Exagerado <br></label>
                        <label><input type="radio" name="id_tiempo_espera" value="4" /> Demasiado tiempo <br></label>
                </div>
            </div>

            <div id="div_id_id_calificacion" class="form-group">
                <label>3. ¿Como calificas el servicio?</label>
                <div class="controls ">
                    <label><input type="radio" name="id_calificacion" value="1" /> Excelente <br></label>
                    <label><input type="radio" name="id_calificacion" value="2" /> Bueno <br></label>
                    <label><input type="radio" name="id_calificacion" value="3" /> Pésimo <br></label>
                    <label><input type="radio" name="id_calificacion" value="4" /> Deficiente <br></label>
                </div>
            </div>

            <div id="div_id_id_horario_atencion" class="form-group">
                <label>4. ¿El horario de atencion del establecimiento de salud te resulta?</label>
                <div class="controls ">
                        <label><input type="radio" name="id_horario_atencion" value="1" /> Accesible <br></label>
                        <label><input type="radio" name="id_horario_atencion" value="2" /> Poco Accesible <br></label>
                        <label><input type="radio" name="id_horario_atencion" value="3" /> Inaccesible <br></label>
                </div>
            </div>
        </div>

        <div id="groupD" name="groupD">
            <h3><span><img src="images/logo.png" width="50px"></span> D. Confiabilidad del Servicio Recibido</h3>

            <div id="div_id_persona_demuestra" class="form-group">
                <label>1. La persona que te atendió demostró</label>
                <div class="controls ">
                        <label><input type="radio" name="demuestra" value="1" /> Amabilidad <br></label>
                        <label><input type="radio" name="demuestra" value="2" /> Respeto <br></label>
                        <label><input type="radio" name="demuestra" value="3" /> Confiabilidad <br></label>
                        <label><input type="radio" name="demuestra" value="4" /> Interés en brindar atención <br></label>
                </div>
            </div>

            <div id="div_id_personal_atiende" class="form-group">
                <label>2. El personal que te atendio:<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="personal_atiende" value="1" /> Está Capacitado <br></label>
                    <label><input type="radio" name="personal_atiende" value="2" /> Poco Capacitado <br></label>
                    <label><input type="radio" name="personal_atiende" value="3" /> No sabe del tema <br></label>
                </div>
            </div>

            <div id="div_id_por_edad" class="form-group">
                <label>3-1. Califica el trato brindado, de acuerdo a tu edad<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="por_edad" value="1" /> Excelente <br></label>
                    <label><input type="radio" name="por_edad" value="2" /> Bueno <br></label>
                    <label><input type="radio" name="por_edad" value="3" /> Deficiente <br></label>
                    <label><input type="radio" name="por_edad" value="4" /> Malo <br></label>
                </div>
            </div>

            <div id="div_id_por_cultura" class="form-group">
                <label>3-2. Califica el trato brindado, de acuerdo a tu cultura<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="por_cultura" value="1" /> Excelente <br></label>
                    <label><input type="radio" name="por_cultura" value="2" /> Bueno <br></label>
                    <label><input type="radio" name="por_cultura" value="3" /> Deficiente <br></label>
                    <label><input type="radio" name="por_cultura" value="4" /> Malo <br></label>
                </div>
            </div>

            <div id="div_id_por_vestimenta" class="form-group">
                <label>3-3. Califica el trato brindado, de acuerdo a tu vestimenta<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="por_vestimenta" value="1" /> Excelente <br></label>
                    <label><input type="radio" name="por_vestimenta" value="2" /> Bueno <br></label>
                    <label><input type="radio" name="por_vestimenta" value="3" /> Deficiente <br></label>
                    <label><input type="radio" name="por_vestimenta" value="4" /> Malo <br></label>
                </div>
            </div>

            <div id="div_id_por_idioma" class="form-group">
                <label>3-4. Califica el trato brindado, de acuerdo a tu idioma<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="por_idioma" value="1" /> Excelente <br></label>
                    <label><input type="radio" name="por_idioma" value="2" /> Bueno <br></label>
                    <label><input type="radio" name="por_idioma" value="3" /> Deficiente <br></label>
                    <label><input type="radio" name="por_idioma" value="4" /> Malo <br></label>
                </div>
            </div>

            <div id="div_id_por_religion" class="form-group">
                <label>3-5. Califica el trato brindado, de acuerdo a tu religion<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="por_religion" value="1" /> Excelente <br></label>
                    <label><input type="radio" name="por_religion" value="2" /> Bueno <br></label>
                    <label><input type="radio" name="por_religion" value="3" /> Deficiente <br></label>
                    <label><input type="radio" name="por_religion" value="4" /> Malo <br></label>
            </div>
            </div>

            <div id="div_id_por_servicio" class="form-group">
                <label>3-6. Califica el trato que te han brindado, de acuerdo al tipo de servicio que requeriste<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="por_servicio" value="1" /> Excelente <br></label>
                    <label><input type="radio" name="por_servicio" value="2" /> Bueno <br></label>
                    <label><input type="radio" name="por_servicio" value="3" /> Deficiente <br></label>
                    <label><input type="radio" name="por_servicio" value="4" /> Malo <br></label>
            </div>
            </div>
        </div>

        <div id="groupE" name="groupE">
            <h3><span><img src="images/logo.png" width="50px"></span> E. Acceso a Condones y Otros Métodos de Planificación Familiar</h3>

            <div id="div_id_donde_consigue_pf" class="form-group">
                <label>1. ¿En tu comunidad donde consigues los condones y otros metodos de Planificacion Familiar?<span class="asteriskField">*</span></label>
                <div class="controls " onchange='SelectChanged();'>
                    <label><input type="radio" name="donde_consigue_pf" value="1" /> Centro o puesto de salud <br></label>
                    <label><input type="radio" name="donde_consigue_pf" value="2" /> ONG <br></label>
                    <label><input type="radio" name="donde_consigue_pf" value="3" /> Farmacia <br></label>
                    <label><input type="radio" name="donde_consigue_pf" value="4" /> Hospital <br></label>
                    <label><input type="radio" name="donde_consigue_pf" value="5" /> Comadronas <br></label>
                    <label><input type="radio" name="donde_consigue_pf" value="6" /> Otros <br></label>
                </div>
            </div>
            <div id="div_donde_consigue_condon" class="form-group">
                <label for="id_otra_cultura" class="control-label ">Especifica Otro Lugar</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="donde_consigue_condon" maxlength="45" name="consigue_condgon" type="text">
                </div>
            </div>

            <div id="div_id_oferta_pf" class="form-group">
                <label>2. Al acercarte al centro de servicio para solicitar informacion sobre métodos de Planificacion Familiar, ¿Cuales te ofertaron?<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="radio" name="oferta_pf" value="1" /> Condones <br></label>
                    <label><input type="radio" name="oferta_pf" value="2" /> T de Cobre <br></label>
                    <label><input type="radio" name="oferta_pf" value="3" /> DIU <br></label>
                    <label><input type="radio" name="oferta_pf" value="4" /> Inyecciones <br></label>
                    <label><input type="radio" name="oferta_pf" value="5" /> Pastillas anticonceptivas <br></label>
                    <label><input type="radio" name="oferta_pf" value="6" /> No me brindaron información <br></label>
                </div>
            </div>

            <div id="div_id_proporcionaron_pf" class="form-group">
                <label>3. ¿Se te proporcionaron condones y otros métodos de planificacion familiar cuando los solicitaste en tu centro de servicios?</label>
                <div class="controls " onchange='SelectChanged();'>
                    <label><input type="radio" name="proporcionaron_pf" value="3" /> Sí <br></label>
                    <label><input type="radio" name="proporcionaron_pf" value="3" /> No <br></label>
                </div>
            </div>

            <div id="div_id_brindaron_opciones" class="form-group">
                <label>4. Ademas, te han dado otras opciones:<span class="asteriskField">*</span></label>
                <div class="controls " onchange='SelectChanged();'>
                    <label><input type="radio" name="brindaron_opciones" value="1" /> Información sobre uso correcto del condón <br></label>
                    <label><input type="radio" name="brindaron_opciones" value="2" /> Información pertinente sobre espaciar embarazos <br></label>
                    <label><input type="radio" name="brindaron_opciones" value="3" /> Han referido a otro lugar <br></label>
                </div>
            </div>
            <div id="div_id_especifica_opciones" class="form-group">
                <label for="id_especifica_opciones" class="control-label ">Especifica otras opciones</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_especifica_opciones" maxlength="45" name="especifica_opciones" type="text">
                </div>
            </div>

            <div id="div_id_requisitos_pf" class="form-group">
                <label>5. ¿Que requisitos debes llenar para obtener condones y otros metodos de planificacion familiar en tu puesto o centro de salud?<span class="asteriskField">*</span></label>
                <div class="controls ">
                    <label><input type="checkbox" name="requisitos_pf[]" value="1"> Mayor de edad </input><br></label>
                    <label><input type="checkbox" name="requisitos_pf[]" value="2"> Firmar consentimiento </input><br></label>
                    <label><input type="checkbox" name="requisitos_pf[]" value="3"> Estar acompañado por un adulto </input><br></label>
                    <label><input type="checkbox" name="requisitos_pf[]" value="4"> Estar casado o unido </input><br></label>
                    <label><input type="checkbox" name="requisitos_pf[]" value="5"> Pago económico </input><br></label>
                    <label><input type="checkbox" name="requisitos_pf[]" value="6"> Otro </input><br></label>
                </div>
            </div>
            <div id="div_id_especifica_requisitos" class="form-group">
                <label>Especifica los requisitos</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_especifica_requisitos" maxlength="45" name="especifica_requisitos" type="text">
                </div>
            </div>

            <div id="div_id_razon_no_proporciona_pf" class="form-group">
                <label>6. ¿Cual fue la razón por la que tu prestador de servicios no te proporciono condones y otros metodos de planificacion familiar?<span class="asteriskField">*</span></label>
                <div class="controls " onchange='SelectChanged();'>
                        <label><input type="checkbox" name="razon_no_proporciona_pf[]" value="1"> No hay </input><br></label>
                        <label><input type="checkbox" name="razon_no_proporciona_pf[]" value="2"> No se proporcionan a menores de edad </input><br></label>
                        <label><input type="checkbox" name="razon_no_proporciona_pf[]" value="3"> Otra (especifique) </input><br></label>
                </div>
            </div>
            <div id="div_id_especifica_razon_no_pf" class="form-group">
                <label>Especifica la razón</label>
                <div class="controls ">
                    <input class="textinput textInput form-control" id="id_especifica_razon_no_pf" maxlength="45" name="especifica_razon_no_pf" type="text">
                </div>
            </div>
        </div>

        <div id="groupF" name="groupF">
            <h3><span><img src="images/logo.png" width="50px"></span> F. Acceso a Información sobre Kit de Emergencia</h3>

            <div id="div_id_atencion_abuso" class="form-group">
                <label>1. ¿Existe servicio o atencion en el centro o puesto de salud mas cercano en caso de abuso sexual?</label>
                <div class="controls " onchange='SelectChanged();'>
                        <label><input type="radio" name="atencion_abuso" value="1" /> Sí <br></label>
                        <label><input type="radio" name="atencion_abuso" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_kit_emergencia" class="form-group">
                <label>2. ¿El centro de servicio cuenta con Kit de emergencia?</label>
                <div class="controls ">
                        <label><input type="radio" name="kit_emergencia" value="1" /> Sí <br></label>
                        <label><input type="radio" name="kit_emergencia" value="2" /> No <br></label>
                </div>
            </div>

            <div id="div_id_prestador_maneja_kit" class="form-group">
                <label>3. ¿El prestador de servicios sabe sobre el manejo del Kit de emergencia?</label>
                <div class="controls ">
                        <label><input type="radio" name="prestador_maneja_kit" value="1" /> Sí <br></label>
                        <label><input type="radio" name="prestador_maneja_kit" value="2" /> No <br></label>
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