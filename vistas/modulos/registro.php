<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Administrar Registro de Visitas

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Administrar Registro de Visitas</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header with-border">

                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarColegiado">

                    Agregar Colegiado

                </button>

                <button class="btn btn-primary" id="actualizar"><img src="vistas/img/plantilla/android-o-iconos-adaptivos.gif" width="30px" /></button>

            </div>



            <div class="box-body" id="resultados">

                <br>
                <table class="table table-bordered table-striped dt-responsive tablaRegistro tablaActualizar" width="100%">

                    <thead>

                        <tr>

                            <th style="width:10px">#</th>
                            <th>ACCIONES</th>
                            <th>COP</th>
                            <th>DATOS COMPLETOS</th>
                            <th>COLEGIOS REGIONAL</th>
                            <th>ESTADO</th>
                            <th>POST GRADO</th>
                            <th>IMAGEN</th>
                            <th>DIGITADOR</th>

                        </tr>

                    </thead>



                </table>

            </div>

        </div>

    </section>

</div>


<!--=====================================
MODAL AGREGAR VISITA
======================================-->

<div id="modalAgregarColegiado" class="modal fade" role="dialog" style="overflow-y: scroll;">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

                <!--=====================================
                CABEZA DEL MODAL
                ======================================-->

                <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Agregar Colegiado </h4>

                </div>

                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->

                <div class="modal-body">

                    <div class="content">

                        <div class="row">

                            <!-- ENTRADA PARA NOMBRE FUNCIONARIO -->
                            <div class="fron-row">

                                <div class="form-group col-md-12">

                                    <div class="input-group">

                                        <span class="input-group-addon">Apellido Paterno:</span>

                                        <input type="text" class="form-control input-lx" name="nuevApellidoPaterno" placeholder="Apellido Paterno" required>


                                    </div>

                                </div>

                                <!-- ENTRADA PARA NOMBRE FUNCIONARIO -->

                                <div class="form-group col-md-12">

                                    <div class="input-group">

                                        <span class="input-group-addon">Apellido Materno:</span>

                                        <input type="text" class="form-control input-lx" name="nuevaApellidoMaterno" placeholder="Apellido Materno" required>
                                        <input type="text" class="form-control input-lx hidden" id="codigoUnicoReclamo" name="codigoUnicoReclamo" require>
                                    </div>

                                </div>

                                <!-- ENTRADA PARA CARGO FUNCIONARIO -->

                                <div class="form-group col-md-12">

                                    <div class="input-group">

                                        <span class="input-group-addon">Nombre:</span>

                                        <input type="text" class="form-control input-lx" name="nuevNombre" placeholder="Nombres" required>

                                    </div>

                                </div>

                                <!-- ENTRADA PARA COLEGIO REGIONAL -->

                                <div class="form-group col-md-12">

                                    <div class="input-group">

                                        <span class="input-group-addon">Colegio Regional:</span>

                                        <input type="text" class="form-control input-lx" name="nuevColegioRegional" required>

                                    </div>

                                </div>


                                <div class="form-group col-md-12">

                                    <div class="input-group">

                                        <span class="input-group-addon bord">Estado:</span>

                                        <select class="form-control input-lx" name="nuevEstado">

                                            <option value="Habilitado">Habilitado</option>
                                            <option value="No Habilitado">No Habilitado</option>

                                        </select>
                                    </div>


                                </div>


                                <div class="form-group col-md-12">

                                    <div class="input-group">

                                        <span class="input-group-addon">Post Grado:</span>

                                        <input type="text" class="form-control input-lx" name="nuevPostGrado" required>

                                    </div>

                                </div>

                                <!-- ENTRADA PARA USUARIO REGISTRADOR -->

                                <div class="form-group col-md-12">

                                    <div class="input-group">

                                        <span class="input-group-addon">Digitador:</span>

                                        <input type="text" class="form-control input-lx" name="nuevUsuarioDigitador" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                                    </div>

                                </div>

                                <!-- ENTRADA PARA SUBIR FOTO -->

                                <div class="form-group">

                                    <div class="panel">Subir Foto</div>
                                    <style>
                                        input {
                                            border-color: white;
                                        }
                                    </style>
                                    <input type="file" class="nuevaImagen inputfile" name="nuevaImagen">


                                    <p class="help-block">Peso máximo de la imagen 2MB</p>

                                    <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

                                </div>



                            </div>


                        </div>
                    </div>
                </div>

                <!--=====================================
                PIE DEL MODAL
                ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar Registro</button>

                </div>

            </form>

            <?php

            $registroColegiado = new ControladorRegistro();
            $registroColegiado->ctrCrearRegistro();


            ?>

        </div>

    </div>

</div>

</div>

<!--=====================================
MODAL EDITAR REGISTRO
======================================-->

<div id="modalEditarRegistro" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post" enctype="multipart/form-data">

                <!--=====================================
                    CABEZA DEL MODAL
                    ======================================-->

                <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Editar Visita</h4>

                </div>

                <!--=====================================
                    CUERPO DEL MODAL
                    ======================================-->

                <div class="modal-body">


                    <p class="help-block"><strong>FUNCIONARIO VISITANTE:</strong></p>


                    <!-- ENTRADA PARA SELECCIONAR CATEGORÍA DEL REGISTRO-->
                    <div class="form-row">

                        <div class="form-group col-md-12">

                            <div class="input-group ">

                                <span class="input-group-addon">Tipo Doc:</span>

                                <input type="text" class="form-control input-lx" maxlength="15" id="editarTipoDocumento" name="editarDniVisitaFuncionario" readonly>


                            </div>
                        </div>



                        <div class="form-group col-md-12">

                            <div class="input-group ">

                                <span class="input-group-addon">N° de Documento:</span>

                                <input type="text" class="form-control input-lx" maxlength="15" id="editarDniVisitaFuncionario" name="editarDniVisitaFuncionario" readonly>


                            </div>
                        </div>

                    </div>
                    <!-- ENTRADA PARA NOMBRE FUNCIONARIO -->
                    <div class="fron-row">

                        <div class="form-group col-md-12">

                            <div class="input-group">

                                <span class="input-group-addon">Nombre Funcionario:</span>

                                <input type="text" class="form-control input-lx" id="editarNombreFuncionario" name="editarNombreFuncionario" readonly>
                                <input class="hidden" type="text" id="editarIdRegistro" name="editarIdRegistro">

                            </div>

                        </div>

                        <!-- ENTRADA PARA NOMBRE FUNCIONARIO -->

                        <div class="form-group col-md-12">

                            <div class="input-group">

                                <span class="input-group-addon">Cargo Funcionario:</span>

                                <input type="text" class="form-control input-lx" id="editarCargoFuncionario" name="editarCargoFuncionario" readonly>

                            </div>

                        </div>

                        <!-- ENTRADA PARA CARGO FUNCIONARIO -->

                        <div class="form-group col-md-12">

                            <div class="input-group">

                                <span class="input-group-addon">Entidad:</span>

                                <input type="text" class="form-control input-lx" id="editarEntidadFuncionario" name="editarEntidadFuncionareditar" readonly>

                            </div>

                        </div>

                        <!-- ENTRADA PARA USUARIO REGISTRADOR -->

                        <div class="form-group col-md-12">

                            <div class="input-group">

                                <span class="input-group-addon">Digitador:</span>

                                <input type="text" class="form-control input-lx" id="editarUsuarioDigitador" name="editarUsuarioDigitador" readonly>

                            </div>

                        </div>

                    </div>


                    <p class="help-block"><strong>FUNCIONARIO DE LA ENTIDAD:</strong></p>

                    <!-- ENTRADA PARA NOMBRE FUNCIONARIO VISITADO-->
                    <div class="fron-row">

                        <div class="form-group col-md-12">

                            <div class="input-group">

                                <span class="input-group-addon">Nombre Funcionario:</span>

                                <input type="text" class="form-control input-lx" id="editarNombreFuncionarioLocal" name="editarNombreFuncionarioLocal" required>


                            </div>

                        </div>




                        <!-- ENTRADA PARA AREA O OFICINA FUNCIONARIO VISITADO-->

                        <div class="form-group col-md-12">

                            <div class="input-group">

                                <span class="input-group-addon">Cargo Funcionario:</span>

                                <input type="text" class="form-control input-lx" id="editarAreaOfFuncionarioLocal" name="editarAreaOfFuncionarioLocal" required>

                            </div>

                        </div>

                        <!-- ENTRADA PARA CARGO EN FUNCIONARIO VISITADO -->

                        <div class="form-group col-md-12">

                            <div class="input-group">

                                <span class="input-group-addon">Entidad:</span>

                                <input type="text" class="form-control input-lx" id="editarCargoFuncionarioLocal" name="editarCargoFuncionarioLocal" required>

                            </div>

                        </div>



                        <p class="help-block"><strong>MOVITO DE LA VISITA:</strong></p>
                        <!-- ENTRADA PARA MOTIVO DE VISITA DEL FUNCIONARIO A LA ENTIDAD -->

                        <div class="form-group col-md-12">

                            <div class="input-group">

                                <span class="input-group-addon"></span>

                                <input type="text" class="form-control input-lx" id="editarMotivo" name="editarMotivo" required>

                            </div>

                        </div>
                    </div>
                    <!-- ENTRADA PARA FECHA DE REGISTRO -->
                    <div class="form-row">

                        <p class="help-block"><strong>FECHA DE SALIDA DEL FUNCIONARIO:</strong></p>

                        <div class="form-group col-md-6">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                                <input type="date" class="form-control input-lx" id="editarFechaSalida" name="editarFechaSalida" required>

                            </div>


                        </div>

                        <div class="form-group col-md-6">

                            <div class="input-group" id="datetimepicker3">

                                <input type='text' class="form-control" id="editarHoraSalida" name="editarHoraSalida" />

                                <span class="input-group-addon">

                                    <span class="glyphicon glyphicon-time"></span>

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

                <!--=====================================
                    PIE DEL MODAL
                    ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar Registro</button>

                </div>

            </form>
            <?php

            $editarVisita = new ControladorRegistro();
            $editarVisita->ctrEditarRegistro();


            ?>


        </div>

    </div>

</div>

<?php

?>