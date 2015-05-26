<?php
/**
 * Created by PhpStorm.
 * User: Marco Barrios
 * Date: 16/02/2015
 * Time: 6:47 PM
 */
$mysqli = new mysqli("monitoreoparla2.db.11193368.hostedresource.com", "monitoreoparla2", "VS02#VMxh4", "monitoreoparla2");
//$mysqli = new mysqli("localhost", "root", "", "monitoreo");
if ($mysqli === false) {
    die ("ERROR: No se estableció la conexión. " . mysqli_connect_error());
} else {
    //<editor-fold desc="INGRESO DE ENCUESTA">
    $sql = "INSERT INTO tblencuestas(idEncuesta, fechaEncuesta, latitudEncuesta, longitudEncuesta, altitudEncuesta) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $mysqli->prepare($sql)) {
        $idenc = '';
        $hoy = getdate();
        $fechaEncuesta = $hoy ['year'] . '/' . $hoy ['mon'] . '/' . $hoy ['mday'] . ' ' . $hoy ['hours'] . ':' . $hoy ['minutes'] . ':' . $hoy ['seconds'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];
        $altitud = $_POST['altitud'];

        $stmt->bind_param('isddd', $idenc, $fechaEncuesta, $latitud, $longitud, $altitud);
        if ($stmt->execute()) {
            $sql = "SELECT MAX(idEncuesta) AS 'idEncuesta' FROM tblencuestas";
            $result = $mysqli->query($sql);
            $row = $result->fetch_object();
            $idencuesta = $row->idEncuesta;

            //<editor-fold desc="INSERCION DE RESPUESTAS A LA BASE DE DATOS">
            $sql = "INSERT INTO tblrespuestas(idRespuesta, idPregunta, idNoRespuesta, idEncuesta) VALUES (?, ?, ?, ?)";
            if ($stmt = $mysqli->prepare($sql)) {
                $idrepuesta = '';
                $nopregunta = 1.1;
                $respuesta = $_POST['genero'];

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
                                $respuesta = $_POST['otrotrabajo'];

                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                if ($stmt->execute()) {
                                    $idrepuesta = '';
                                    $nopregunta = 1.6;
                                    $respuesta = $_POST['cultura'];

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
                                                                                $respuesta = $_POST['frecuenciarelaciones'];

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
                                                                                                    $nopregunta = 3.7;
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
                                                                                                            $respuesta = $_POST['hablarcondonpareja'];

                                                                                                            $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                            if ($stmt->execute()) {
                                                                                                                $idrepuesta = '';
                                                                                                                $nopregunta = 4.3;
                                                                                                                $respuesta = $_POST['mujer_derecho_relacion'];

                                                                                                                $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                if ($stmt->execute()) {
                                                                                                                    $idrepuesta = '';
                                                                                                                    $nopregunta = 4.4;
                                                                                                                    $respuesta = $_POST['mujer_derecho_condon'];

                                                                                                                    $stmt->bind_param('sdii', $idrespuesta, $nopregunta, $respuesta, $idencuesta);
                                                                                                                    if ($stmt->execute()) {
                                                                                                                        $idrepuesta = '';
                                                                                                                        $nopregunta = 4.5;
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
                                                                                                                                                $sql = "INSERT INTO tblrespuestatextos(idRespuestaTexto, noRespuesta, idEncuesta, texto) VALUES (?, ?, ?, ?)";
                                                                                                                                                if ($stmt = $mysqli->prepare($sql)) {
                                                                                                                                                    $idrespuestatexto = '';
                                                                                                                                                    $norespuesta = 1.4;
                                                                                                                                                    $texto = $_POST['otro_trabajo'];

                                                                                                                                                    $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                        $idrespuestatexto = '';
                                                                                                                                                        $norespuesta = 1.5;
                                                                                                                                                        $texto = $_POST['otra_cultura'];

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
                                                                                                                                                                                    $texto = $_POST['id_otro_lugar_metodos'];

                                                                                                                                                                                    $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                                                        $idrespuestatexto = '';
                                                                                                                                                                                        $norespuesta = 3.6;
                                                                                                                                                                                        $texto = $_POST['pasoscondon'];

                                                                                                                                                                                        $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                                                                            $idrespuestatexto = '';
                                                                                                                                                                                            $norespuesta = 3.7;
                                                                                                                                                                                            $texto = $_POST['otro_servicio_sugerido'];

                                                                                                                                                                                            $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                            if ($stmt->execute()) {
                                                                                                                                                                                                $idrespuestatexto = '';
                                                                                                                                                                                                $norespuesta = 4.3;
                                                                                                                                                                                                $texto = $_POST['porque_derecho_relacion'];

                                                                                                                                                                                                $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                if ($stmt->execute()) {
                                                                                                                                                                                                    $idrespuestatexto = '';
                                                                                                                                                                                                    $norespuesta = 4.4;
                                                                                                                                                                                                    $texto = $_POST['porque_derecho_condon'];

                                                                                                                                                                                                    $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                    if ($stmt->execute()) {
                                                                                                                                                                                                        $idrespuestatexto = '';
                                                                                                                                                                                                        $norespuesta = 4.5;
                                                                                                                                                                                                        $texto = $_POST['id_otra_razon'];

                                                                                                                                                                                                        $stmt->bind_param('sdis', $idrespuestatexto, $norespuesta, $idencuesta, $texto);
                                                                                                                                                                                                        if ($stmt->execute()) {
                                                                                                                                                                                                            $mysqli->close();
                                                                                                                                                                                                            redir();
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

function redir(){
    if (headers_sent()) {
        echo "<!DOCTYPE HTML> <html lang='en-US'> <head> <meta charset='UTF-8'> <meta http-equiv='refresh' content='1;url=http://www.parlamentoninez.org/monitoreo'> <script type='text/javascript'> window.location.href = 'http://www.parlamentoninez.org/monitoreo' </script> <title>Redireccion</title> </head> <body> <!-- Note: don't tell people to `click` the link, just tell them that it is a link. --> Si no es redirigido a la página de inicio, pulse el siguiente enlace <a href='http://www.parlamentoninez.org/monitoreo'>INICIO</a> </body> </html>";
    }
    else {
        exit(header("Location: http://www.parlamentoninez.org/monitoreo"));
    }
}

?>