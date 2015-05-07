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

$mysqli = new mysqli("localhost", "root", "1234", "monitoreo");
if ($mysqli === false) {
    die ("ERROR: No se estableció la conexión. " . mysqli_connect_error());
} else {

    //<editor-fold desc="INGRESO DE ENCUESTA">
    $sql = "INSERT INTO tblEncuestas(idEncuesta, idFacebookEncuestado, nombreFacebookEncuestado, fechaEncuesta, latitudEncuesta, longitudEncuesta, altitudEncuesta) VALUES (?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = $mysqli->prepare($sql)) {
        $idenc = '';
        $idfacebook = $_POST['id'];
        $namefacebook = $_POST['name'];
        $hoy = getdate();
        $fechaEncuesta = $hoy ['year'] . '/' . $hoy ['mon'] . '/' . $hoy ['mday'] . ' ' . $hoy ['hours'] . ':' . $hoy ['minutes'] . ':' . $hoy ['seconds'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];
        $altitud = $_POST['altitud'];

        $stmt->bind_param('isssddd', $idenc, $idfacebook, $namefacebook, $fechaEncuesta, $latitud, $longitud, $altitud);
        if ($stmt->execute()) {
                $sql = "SELECT MAX(idEncuesta) AS 'idEncuesta' FROM tblEncuestas";
                $result = $mysqli->query($sql);
                $row = $result->fetch_object();
                $idencuesta = $row->idEncuesta;

            //<editor-fold desc="INSERCION DE RESPUESTAS A LA BASE DE DATOS">
            $sql = "INSERT INTO tblRespuestas(idRespuesta, idPregunta, idNoRespuesta, idEncuesta) VALUES (?, ?, ?, ?)";
            if ($stmt = $mysqli->prepare($sql)) {
                $idrepuesta = '';
                $nopregunta = 1;
                $respuesta = $_POST['sexo'];

                $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                if ($stmt->execute()) {
                    $idrepuesta = '';
                    $nopregunta = 2;
                    $respuesta = $_POST['rangoedad'];

                    $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                    if ($stmt->execute()) {
                        $idrepuesta = '';
                        $nopregunta = 3;
                        $respuesta = $_POST['cultura'];

                        $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                        if ($stmt->execute()) {
                            $idrepuesta = '';
                            $nopregunta = 4;
                            $respuesta = $_POST['idservicio_salud'];

                            $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                            if ($stmt->execute()) {
                                $idrepuesta = '';
                                $nopregunta = 5;
                                $respuesta = $_POST['idubicacion_servicio'];

                                $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                if ($stmt->execute()) {
                                    $idrepuesta = '';
                                    $nopregunta = 6;
                                    $respuesta = $_POST['tiempo_servicio'];

                                    $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                    if ($stmt->execute()) {
                                        $idrepuesta = '';
                                        $nopregunta = 7;
                                        $respuesta = $_POST['personal_capacitado_im'];

                                        $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                        if ($stmt->execute()) {
                                            $idrepuesta = '';
                                            $nopregunta = 8;
                                            $respuesta = $_POST['sala_equipada'];

                                            $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                            if ($stmt->execute()) {
                                                $idrepuesta = '';
                                                $nopregunta = 9;
                                                $respuesta = $_POST['hay_carteles'];

                                                $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                if ($stmt->execute()) {
                                                    $idrepuesta = '';
                                                    $nopregunta = 10;
                                                    $respuesta = $_POST['carteles_im'];

                                                    $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                    if ($stmt->execute()) {
                                                        $idrepuesta = '';
                                                        $nopregunta = 11;
                                                        $respuesta = $_POST['id_motivo_acercamiento'];

                                                        $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                        if ($stmt->execute()) {
                                                            $idrepuesta = '';
                                                            $nopregunta = 12;
                                                            $respuesta = $_POST['id_tiempo_espera'];

                                                            $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                            if ($stmt->execute()) {
                                                                $idrepuesta = '';
                                                                $nopregunta = 13;
                                                                $respuesta = $_POST['id_calificacion'];

                                                                $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                if ($stmt->execute()) {
                                                                    $idrepuesta = '';
                                                                    $nopregunta = 14;
                                                                    $respuesta = $_POST['id_horario_atencion'];

                                                                    $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                    if ($stmt->execute()) {
                                                                        $idrepuesta = '';
                                                                        $nopregunta = 15;
                                                                        $respuesta = $_POST['demuestra'];

                                                                        $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                        if ($stmt->execute()) {
                                                                            $idrepuesta = '';
                                                                            $nopregunta = 16;
                                                                            $respuesta = $_POST['personal_atiende'];

                                                                            $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                            if ($stmt->execute()) {
                                                                                $idrepuesta = '';
                                                                                $nopregunta = 17;
                                                                                $respuesta = $_POST['por_edad'];

                                                                                $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                if ($stmt->execute()) {
                                                                                    $idrepuesta = '';
                                                                                    $nopregunta = 18;
                                                                                    $respuesta = $_POST['por_cultura'];

                                                                                    $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                    if ($stmt->execute()) {
                                                                                        $idrepuesta = '';
                                                                                        $nopregunta = 19;
                                                                                        $respuesta = $_POST['por_vestimenta'];

                                                                                        $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                        if ($stmt->execute()) {
                                                                                            $idrepuesta = '';
                                                                                            $nopregunta = 20;
                                                                                            $respuesta = $_POST['por_idioma'];

                                                                                            $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                            if ($stmt->execute()) {
                                                                                                $idrepuesta = '';
                                                                                                $nopregunta = 21;
                                                                                                $respuesta = $_POST['por_religion'];

                                                                                                $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                if ($stmt->execute()) {
                                                                                                    $idrepuesta = '';
                                                                                                    $nopregunta = 22;
                                                                                                    $respuesta = $_POST['por_servicio'];

                                                                                                    $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                    if ($stmt->execute()) {
                                                                                                        $idrepuesta = '';
                                                                                                        $nopregunta = 23;
                                                                                                        $respuesta = $_POST['donde_consigue_pf'];

                                                                                                        $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                        if ($stmt->execute()) {
                                                                                                            $idrepuesta = '';
                                                                                                            $nopregunta = 24;
                                                                                                            $respuesta = $_POST['oferta_pf'];

                                                                                                            $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                            if ($stmt->execute()) {
                                                                                                                $idrepuesta = '';
                                                                                                                $nopregunta = 25;
                                                                                                                $respuesta = $_POST['proporcionaron_pf'];

                                                                                                                $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                if ($stmt->execute()) {
                                                                                                                    $idrepuesta = '';
                                                                                                                    $nopregunta = 26;
                                                                                                                    $respuesta = $_POST['brindaron_opciones'];

                                                                                                                    $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                    if ($stmt->execute()) {
                                                                                                                        $idrepuesta = '';
                                                                                                                        $nopregunta = 27;
                                                                                                                        $respuesta = $_POST['requisitos_pf'];

                                                                                                                        $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                        if ($stmt->execute()) {
                                                                                                                            $idrepuesta = '';
                                                                                                                            $nopregunta = 28;
                                                                                                                            $respuesta = $_POST['razon_no_proporciona_pf'];

                                                                                                                            $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                            if ($stmt->execute()) {
                                                                                                                                $idrepuesta = '';
                                                                                                                                $nopregunta = 29;
                                                                                                                                $respuesta = $_POST['atencion_abuso'];

                                                                                                                                $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                if ($stmt->execute()) {
                                                                                                                                    $idrepuesta = '';
                                                                                                                                    $nopregunta = 30;
                                                                                                                                    $respuesta = $_POST['kit_emergencia'];

                                                                                                                                    $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                        $idrepuesta = '';
                                                                                                                                        $nopregunta = 31;
                                                                                                                                        $respuesta = $_POST['prestador_maneja_kit'];

                                                                                                                                        $stmt->bind_param('siii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                                        if ($stmt->execute()) {

                                                                                                                                            $sql = "INSERT INTO tblRespuestaTextos(idRespuestaTexto, noRespuesta, idEncuesta, texto) VALUES (?, ?, ?, ?)";
                                                                                                                                            if ($stmt = $mysqli->prepare($sql)) {
                                                                                                                                                $respuestaTexto = '';
                                                                                                                                                $respuestaid = 3;
                                                                                                                                                $texto = $_POST['otra_cultura'];

                                                                                                                                                $stmt->bind_param('siis', $respuestaTexto, $respuestaid, $idencuesta, $texto);
                                                                                                                                                if ($stmt->execute()) {
                                                                                                                                                    $respuestaTexto = '';
                                                                                                                                                    $respuestaid = 4;
                                                                                                                                                    $texto = $_POST['otro_servicio_salud'];

                                                                                                                                                    $stmt->bind_param('siis', $respuestaTexto, $respuestaid, $idencuesta, $texto);
                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                        $respuestaTexto = '';
                                                                                                                                                        $respuestaid = 6;
                                                                                                                                                        $texto = $_POST['especifica_tiempo'];

                                                                                                                                                        $stmt->bind_param('siis', $respuestaTexto, $respuestaid, $idencuesta, $texto);
                                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                                            $respuestaTexto = '';
                                                                                                                                                            $respuestaid = 23;
                                                                                                                                                            $texto = $_POST['consigue_condgon'];

                                                                                                                                                            $stmt->bind_param('siis', $respuestaTexto, $respuestaid, $idencuesta, $texto);
                                                                                                                                                            if ($stmt->execute()) {
                                                                                                                                                                $respuestaTexto = '';
                                                                                                                                                                $respuestaid = 26;
                                                                                                                                                                $texto = $_POST['especifica_opciones'];

                                                                                                                                                                $stmt->bind_param('siis', $respuestaTexto, $respuestaid, $idencuesta, $texto);
                                                                                                                                                                if ($stmt->execute()) {
                                                                                                                                                                    $respuestaTexto = '';
                                                                                                                                                                    $respuestaid = 27;
                                                                                                                                                                    $texto = $_POST['especifica_requisitos'];

                                                                                                                                                                    $stmt->bind_param('siis', $respuestaTexto, $respuestaid, $idencuesta, $texto);
                                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                                        $respuestaTexto = '';
                                                                                                                                                                        $respuestaid = 28;
                                                                                                                                                                        $texto = $_POST['especifica_razon_no_pf'];

                                                                                                                                                                        $stmt->bind_param('siis', $respuestaTexto, $respuestaid, $idencuesta, $texto);
                                                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                                                            echo "Datos Guardados";
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
    echo "ERROR: No fue posible ejecutar consulta: $sql. " . $mysqli->error;
}
$mysqli->close();

header('Location: ../index.php');

?>
</body>
