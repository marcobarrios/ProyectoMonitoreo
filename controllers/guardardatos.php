<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Monitoreo</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Marco Barrios
 * Date: 16/02/2015
 * Time: 6:47 PM
 */
require '../index.php';

$mysqli = new mysqli("localhost", "root", "", "monitoreo");
if ($mysqli === false) {
    die ("ERROR: No se estableció la conexión. " . mysqli_connect_error());
} else {
    //<editor-fold desc="INGRESO DE ENCUESTA">
    $sql = "INSERT INTO tblEncuestas(idEncuesta, fechaEncuesta, latitudEncuesta, longitudEncuesta, altitudEncuesta) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $mysqli->prepare($sql)) {
        $idenc = '';
        $hoy = getdate();
        $fechaEncuesta = $hoy ['year'] . '/' . $hoy ['mon'] . '/' . $hoy ['mday'] . ' ' . $hoy ['hours'] . ':' . $hoy ['minutes'] . ':' . $hoy ['seconds'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];
        $altitud = $_POST['altitud'];

        $stmt->bind_param('isddd', $idenc, $fechaEncuesta, $latitud, $longitud, $altitud);
        if ($stmt->execute()) {
                $sql = "SELECT MAX(idEncuesta) AS 'idEncuesta' FROM tblEncuestas";
                $result = $mysqli->query($sql);
                $row = $result->fetch_object();
                $idencuesta = $row->idEncuesta;

            //<editor-fold desc="INSERCION DE RESPUESTAS A LA BASE DE DATOS">
            $sql = "INSERT INTO tblRespuestas(idRespuesta, idPregunta, idNoRespuesta, idEncuesta) VALUES (?, ?, ?, ?)";
            if ($stmt = $mysqli->prepare($sql)) {
                $idrepuesta = '';
                $nopregunta = 1.1;
                $respuesta = $_POST['sexo'];

                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                if ($stmt->execute()) {
                    $idrepuesta = '';
                    $nopregunta = 1.2;
                    $respuesta = $_POST['rangoedad'];

                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                    if ($stmt->execute()) {
                        $idrepuesta = '';
                        $nopregunta = 1.3;
                        $respuesta = $_POST['estadocivil'];

                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                        if ($stmt->execute()) {
                            $idrepuesta = '';
                            $nopregunta = 1.4;
                            $respuesta = $_POST['dedica'];

                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                            if ($stmt->execute()) {
                                $idrepuesta = '';
                                $nopregunta = 1.5;
                                $respuesta = $_POST['cultura'];

                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                if ($stmt->execute()) {
                                    $idrepuesta = '';
                                    $nopregunta = 1.6;
                                    $respuesta = $_POST['vivienda'];

                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                    if ($stmt->execute()) {
                                        $idrepuesta = '';
                                        $nopregunta = 2.1;
                                        $respuesta = $_POST['idservicio_salud'];

                                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                        if ($stmt->execute()) {
                                            $idrepuesta = '';
                                            $nopregunta = 2.2;
                                            $respuesta = $_POST['veces_visita'];

                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                            if ($stmt->execute()) {
                                                $idrepuesta = '';
                                                $nopregunta = 2.3;
                                                $respuesta = $_POST['motivo_acercamiento'];

                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                if ($stmt->execute()) {
                                                    $idrepuesta = '';
                                                    $nopregunta = 2.4;
                                                    $respuesta = $_POST['personal_capacitado'];

                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                    if ($stmt->execute()) {
                                                        $idrepuesta = '';
                                                        $nopregunta = 2.5;
                                                        $respuesta = $_POST['donde_escucho'];

                                                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                        if ($stmt->execute()) {
                                                            $idrepuesta = '';
                                                            $nopregunta = 2.61;
                                                            $respuesta = $_POST['consigue_condones'];

                                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                            if ($stmt->execute()) {
                                                                $idrepuesta = '';
                                                                $nopregunta = 2.62;
                                                                $respuesta = $_POST['consigue_pruebas'];

                                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                if ($stmt->execute()) {
                                                                    $idrepuesta = '';
                                                                    $nopregunta = 2.63;
                                                                    $respuesta = $_POST['consigue_metodos'];

                                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                    if ($stmt->execute()) {
                                                                        $idrepuesta = '';
                                                                        $nopregunta = 3.1;
                                                                        $respuesta = $_POST['inicio_relacion'];

                                                                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                        if ($stmt->execute()) {
                                                                            $idrepuesta = '';
                                                                            $nopregunta = 3.2;
                                                                            $respuesta = $_POST['relacion_6meses'];

                                                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                            if ($stmt->execute()) {
                                                                                $idrepuesta = '';
                                                                                $nopregunta = 3.3;
                                                                                $respuesta = $_POST['estado_relacion'];

                                                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                if ($stmt->execute()) {
                                                                                    $idrepuesta = '';
                                                                                    $nopregunta = 3.4;
                                                                                    $respuesta = $_POST['quien_relacion'];

                                                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                    if ($stmt->execute()) {
                                                                                        $idrepuesta = '';
                                                                                        $nopregunta = 3.5;
                                                                                        $respuesta = $_POST['utilizo_condon'];

                                                                                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                        if ($stmt->execute()) {
                                                                                            $idrepuesta = '';
                                                                                            $nopregunta = 3.6;
                                                                                            $respuesta = $_POST['sabe_condon'];

                                                                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                            if ($stmt->execute()) {
                                                                                                $idrepuesta = '';
                                                                                                $nopregunta = 3.71;
                                                                                                $respuesta = $_POST['llagas'];

                                                                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                if ($stmt->execute()) {
                                                                                                    $idrepuesta = '';
                                                                                                    $nopregunta = 3.72;
                                                                                                    $respuesta = $_POST['picazon'];

                                                                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                    if ($stmt->execute()) {
                                                                                                        $idrepuesta = '';
                                                                                                        $nopregunta = 3.73;
                                                                                                        $respuesta = $_POST['dolor'];

                                                                                                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                        if ($stmt->execute()) {
                                                                                                            $idrepuesta = '';
                                                                                                            $nopregunta = 3.74;
                                                                                                            $respuesta = $_POST['materia'];

                                                                                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                            if ($stmt->execute()) {
                                                                                                                $idrepuesta = '';
                                                                                                                $nopregunta = 3.75;
                                                                                                                $respuesta = $_POST['flujo'];

                                                                                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                if ($stmt->execute()) {
                                                                                                                    $idrepuesta = '';
                                                                                                                    $nopregunta = 3.76;
                                                                                                                    $respuesta = $_POST['ulcera'];

                                                                                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                    if ($stmt->execute()) {
                                                                                                                        $idrepuesta = '';
                                                                                                                        $nopregunta = 3.8;
                                                                                                                        $respuesta = $_POST['servicio_sugerido'];

                                                                                                                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                        if ($stmt->execute()) {
                                                                                                                            $idrepuesta = '';
                                                                                                                            $nopregunta = 4.1;
                                                                                                                            $respuesta = $_POST['quien_debe_utilizar'];

                                                                                                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                            if ($stmt->execute()) {
                                                                                                                                $idrepuesta = '';
                                                                                                                                $nopregunta = 4.2;
                                                                                                                                $respuesta = $_POST['hablar_condon'];

                                                                                                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                if ($stmt->execute()) {
                                                                                                                                    $idrepuesta = '';
                                                                                                                                    $nopregunta = 4.3;
                                                                                                                                    $respuesta = $_POST['hablar_prueba'];

                                                                                                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                        $idrepuesta = '';
                                                                                                                                        $nopregunta = 4.4;
                                                                                                                                        $respuesta = $_POST['mujer_derecho_relacion'];

                                                                                                                                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                            $idrepuesta = '';
                                                                                                                                            $nopregunta = 4.5;
                                                                                                                                            $respuesta = $_POST['mujer_derecho_condon'];

                                                                                                                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                            if ($stmt->execute()) {
                                                                                                                                                $idrepuesta = '';
                                                                                                                                                $nopregunta = 4.6;
                                                                                                                                                $respuesta = $_POST['por_idioma'];

                                                                                                                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                                if ($stmt->execute()) {
                                                                                                                                                    $idrepuesta = '';
                                                                                                                                                    $nopregunta = 5.1;
                                                                                                                                                    $respuesta = $_POST['existe_servicio'];

                                                                                                                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                        $idrepuesta = '';
                                                                                                                                                        $nopregunta = 5.2;
                                                                                                                                                        $respuesta = $_POST['existe_kit'];

                                                                                                                                                        $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                                            $idrepuesta = '';
                                                                                                                                                            $nopregunta = 5.3;
                                                                                                                                                            $respuesta = $_POST['prestador_conoce'];

                                                                                                                                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                                            if ($stmt->execute()) {
                                                                                                                                                                $idrepuesta = '';
                                                                                                                                                                $nopregunta = 6.1;
                                                                                                                                                                $respuesta = $_POST['califica_servicio'];

                                                                                                                                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                                                if ($stmt->execute()) {
                                                                                                                                                                    $idrepuesta = '';
                                                                                                                                                                    $nopregunta = 6.2;
                                                                                                                                                                    $respuesta = $_POST['horario_atencion'];

                                                                                                                                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                                        $sql = "INSERT INTO tblRespuestaTextos(idRespuestaTexto, noRespuesta, idEncuesta, texto) VALUES (?, ?, ?, ?)";
                                                                                                                                                                        if ($stmt = $mysqli->prepare($sql)) {
                                                                                                                                                                            $idrespuestatexto = '';
                                                                                                                                                                            $norespuesta = 1.5;
                                                                                                                                                                            $texto = $_POST['otra_cultura'];
                                                                                                                                                                            $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                            if ($stmt->execute()) {
                                                                                                                                                                                $idrespuestatexto = '';
                                                                                                                                                                                $norespuesta = 1.6;
                                                                                                                                                                                $texto = $_POST['otra_vivienda'];
                                                                                                                                                                                $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                if ($stmt->execute()) {
                                                                                                                                                                                    $idrespuestatexto = '';
                                                                                                                                                                                    $norespuesta = 2.1;
                                                                                                                                                                                    $texto = $_POST['otro_servicio_salud'];

                                                                                                                                                                                    $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                                                        $idrespuestatexto = '';
                                                                                                                                                                                        $norespuesta = 2.3;
                                                                                                                                                                                        $texto = $_POST['especifica_motivo'];

                                                                                                                                                                                        $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                                                                            $idrespuestatexto = '';
                                                                                                                                                                                            $norespuesta = 2.5;
                                                                                                                                                                                            $texto = $_POST['especifica_escucho'];

                                                                                                                                                                                            $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                            if ($stmt->execute()) {
                                                                                                                                                                                                $idrespuestatexto = '';
                                                                                                                                                                                                $norespuesta = 2.61;
                                                                                                                                                                                                $texto = $_POST['otro_lugar_condones'];

                                                                                                                                                                                                $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                if ($stmt->execute()) {
                                                                                                                                                                                                    $idrespuestatexto = '';
                                                                                                                                                                                                    $norespuesta = 2.62;
                                                                                                                                                                                                    $texto = $_POST['id_otro_lugar_pruebas'];

                                                                                                                                                                                                    $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                                                                        $idrespuestatexto = '';
                                                                                                                                                                                                        $norespuesta = 2.63;
                                                                                                                                                                                                        $texto = $_POST['id_otro_lugar_metodos'];

                                                                                                                                                                                                        $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                                                                                            $idrespuestatexto = '';
                                                                                                                                                                                                            $norespuesta = 3.8;
                                                                                                                                                                                                            $texto = $_POST['otro_servicio_sugerido'];

                                                                                                                                                                                                            $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                            if ($stmt->execute()) {
                                                                                                                                                                                                                $idrespuestatexto = '';
                                                                                                                                                                                                                $norespuesta = 4.4;
                                                                                                                                                                                                                $texto = $_POST['porque_derecho_relacion'];

                                                                                                                                                                                                                $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                                if ($stmt->execute()) {
                                                                                                                                                                                                                    $idrespuestatexto = '';
                                                                                                                                                                                                                    $norespuesta = 4.5;
                                                                                                                                                                                                                    $texto = $_POST['porque_derecho_condon'];

                                                                                                                                                                                                                    $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                                                                                        $idrespuestatexto = '';
                                                                                                                                                                                                                        $norespuesta = 4.6;
                                                                                                                                                                                                                        $texto = $_POST['id_otra_razon'];

                                                                                                                                                                                                                        $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                                                                                                            $mysqli->close();
                                                                                                                                                                                                                            header('Location: ../index.php');
                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                                                        }
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                                                }
                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                                            }
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                                        }
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                                    }
                                                                                                                                                                                                } else {
                                                                                                                                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                                }
                                                                                                                                                                                            } else {
                                                                                                                                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                            }
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                        }
                                                                                                                                                                                    } else {
                                                                                                                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                    }
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                                }
                                                                                                                                                                            } else {
                                                                                                                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                            }
                                                                                                                                                                        } else {
                                                                                                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                        }
                                                                                                                                                                    } else {
                                                                                                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                    }
                                                                                                                                                                } else {
                                                                                                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                                }
                                                                                                                                                            } else {
                                                                                                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                            }
                                                                                                                                                        } else {
                                                                                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                        }
                                                                                                                                                    } else {
                                                                                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                    }
                                                                                                                                                } else {
                                                                                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                                }
                                                                                                                                            } else {
                                                                                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                            }
                                                                                                                                        } else {
                                                                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                        }
                                                                                                                                    } else {
                                                                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                    }
                                                                                                                                } else {
                                                                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                                }
                                                                                                                            } else {
                                                                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                            }
                                                                                                                        } else {
                                                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                        }
                                                                                                                    } else {
                                                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                    }
                                                                                                                } else {
                                                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                                }
                                                                                                            } else {
                                                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                            }
                                                                                                        } else {
                                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                        }
                                                                                                    } else {
                                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                    }
                                                                                                } else {
                                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                                }
                                                                                            } else {
                                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                            }
                                                                                        } else {
                                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                        }
                                                                                    } else {
                                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                    }
                                                                                } else {
                                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                                }
                                                                            } else {
                                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                            }
                                                                        } else {
                                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                        }
                                                                    } else {
                                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                    }
                                                                } else {
                                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                                }
                                                            } else {
                                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                            }
                                                        } else {
                                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                        }
                                                    } else {
                                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                    }
                                                } else {
                                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                                }
                                            } else {
                                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                            }
                                        } else {
                                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                        }
                                    } else {
                                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                    }
                                } else {
                                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                                }
                            } else {
                                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                            }
                        } else {
                            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                        }
                    } else {
                        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                    }
                } else {
                    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
                }
            } else {
                echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
            }
            //</editor-fold>

        } else {
            echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
        }
    } else {
        echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
    }
    //</editor-fold>
}
?>
</body>