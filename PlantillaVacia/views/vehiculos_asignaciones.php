<?php include 'header.php'; ?>

<body>
    <div id="app">
        <!-- <div id="sidebar" class="active">-->
        <?php $page = 'exp';
        $item = '1';
        include 'nav_bar.php';  ?>
        <?php include 'navbar-horizontal.php';  ?>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <!-- MODALES-->
            
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Vehiculo y asignaciones</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                        </nav>
                    </div>
                </div>
            </div>

            <!--Extra Large Modal -->
            <div class="modal fade text-left w-100" id="completeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title white" id="myModalLabel16">Nuevo vehiculo
                            </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="row">
                                <div class="col-md-4 col-12">

                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">Numero de equipo</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="" id="Id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-credit-card-2-front"></i>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group has-icon-left">
                                        <label for="Id-icon">Numero de placa</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="" id="Id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-credit-card-2-front"></i>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group has-icon-left">
                                        <label for="Id-icon">Año del vehiculo</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="<?php echo date("Y") ?>" id="Id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar3"></i>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group has-icon-left">
                                        <label for="Id-icon">Año del vehiculo</label>
                                       <select class="form-select" aria-label="Default select example">
                                            <option selected>Seleccione una opción</option>
                                            <option value="1">AUTOMOVIL</option>
                                            <option value="2">MICROBUS</option>
                                            <option value="3">CAMION</option>
                                            <option value="3">AMBULANCIA</option>
                                        </select>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">Funcion</label>
                                       <select class="form-select" aria-label="Default select example">
                                            <option selected>Seleccione una opción</option>
                                            <option value="1">Civil</option>
                                            <option value="2">Patrulla</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-md-4 col-12 mb-3 mb-md-0">
                                     <div class="form-group has-icon-left">
                                        <label for="Id-icon">Legalidad</label>
                                       <select class="form-select" aria-label="Default select example">
                                            <option selected>Institucional</option>
                                            <option value="1">Comodato</option>
                                            <option value="2">Deposito Local</option>
                                        </select>
                                    </div>
                                    <div class="border rounded p-3" style="border-color: rgba(0,0,0,0.8)">
                                       <div class="form-group">
                                            <label for="Id-icon">Situacion del vehiculo</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Activo
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2" >
                                                    Inactivo
                                                </label>
                                            </div>
                                       </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Estado de la situacion</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="1">Disponible</option>
                                                <option selected>No disponible</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Estado del vehiculo</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Seleccione una opcion</option>
                                                <option value="1">MANTENIMIENTO PREVENTIVO</option>
                                                <option value="2">FALTA DE LLANTAS</option>
                                            </select>
                                        </div>
                                         <div class="form-group has-icon-left">
                                            <label for="Correo-icon">Fecha del estado actual</label>
                                            <div class="position-relative">
                                                <input type="date" class="form-control" placeholder="" id="Id-icon" value="<?php echo date("Y-m-d") ?>">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="border rounded p-3" style="border-color: rgba(0,0,0,0.8)">
                                        <div class="form-group has-icon-left">
                                            <label for="Id-icon">Undiad policial</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="1">Departamento de inteligencia</option>
                                                <option selected>Seccion de recopilacion de informacion</option>
                                            </select>
                                        </div>
                                         <div class="form-group has-icon-left">
                                            <label for="Correo-icon">Fecha de la asignacion actual</label>
                                            <div class="position-relative">
                                                <input type="date" class="form-control" placeholder="" id="Id-icon" value="<?php echo date("Y-m-d") ?>">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" onclick="Limpiar()">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Cancelar</span>
                            </button>
                            <button type="button" class="btn btn-primary ml-1" onclick="validarCampos()">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Registrar</span>
                            </button>
                        </div>
                    </div>
                </div>


            </div>

             <div class="modal fade text-left w-100" id="modalEstados" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title white" id="myModalLabel16">Estado del vehiculo
                            </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                           <p class="h6 fw-normal">Estado actual: <span class="fw-bold badge bg-danger">Inactivo</span></p>
                           <p class="h6 fw-normal">Situacion actual: <span class="fw-bold">Accidentado</span></p>
                           <hr>
                           <h4 class="h6">Listado de estados anteriores</h4>
                            <table class="table table-striped" id="table2">
                                        <thead>
                                            <tr>
                                                <th>Fecha del estado</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                    Accientado
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                  Daños furtuitos
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                    Accientado
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                  Daños furtuitos
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                    Accientado
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                  Daños furtuitos
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                    Accientado
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                  Daños furtuitos
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                    Accientado
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                  Daños furtuitos
                                                </td>                                               
                                            </tr>
                                        </tbody>
                                    </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" onclick="Limpiar()">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Cancelar</span>
                            </button>
                        </div>
                    </div>
                </div>


            </div>

            <div class="modal fade text-left w-100" id="modalAsignaciones" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title white" id="myModalLabel16">Estado del vehiculo
                            </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                           <p class="h6 fw-normal">Asignacion actual: <span class="fw-bold">Puesto Guadalupe</span></p>
                           <hr>
                           <h4 class="h6">Listado de asignaciones anteriores</h4>
                            <table class="table table-striped" id="table3">
                                        <thead>
                                            <tr>
                                                <th>Fecha de la asignacion</th>
                                                <th>Unidad policial</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                    Departamento de inteligencia
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td><?php echo date("d-m-Y")?></td>
                                                <td>
                                                 Puesto de tepetitan
                                                </td>                                               
                                            </tr>
                                        </tbody>
                                    </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" onclick="Limpiar()">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Cancelar</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            
            

            <!--FIN DEL MODAL PARA REGISTRO DE CONTACTOS-->
            <!--login form Modal -->
           
            
            <!--Fin de modal registro telefono-->

           

            <section id="basic-modals">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body d-grid gap-2">
                                    <span>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#completeModal" class="btn btn-outline-primary"> Nuevo vehiculo</button>
                                    </span>
                                    <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>Numero de equipo</th>
                                                <th>Placa</th>
                                                <th>Legalidad</th>
                                                <th>Funcion</th>
                                                <th>Tipo</th>
                                                <th>Estado</th>
                                                <th>Asignacion</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>LV13-3375</td>
                                                <td>P246182</td>
                                                <td>Institucional</td>
                                                <td>
                                                    Patrulla
                                                </td>
                                                <td>
                                                   MICROBUS
                                                </td>
                                                <td>
                                                     <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalEstados"><i class="bi bi-eye"></i></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalAsignaciones"><i class="bi bi-eye"></i></button>
                                                </td>
                                                <td>
                                                       <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                          <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

            </section>
            <script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
            <script>
                // Simple Datatable
                let table1 = document.querySelector('#table1');
                let dataTable1 = new simpleDatatables.DataTable(table1);
                let table2 = document.querySelector('#table2');
                let dataTable2 = new simpleDatatables.DataTable(table2);
                let table3 = document.querySelector('#table3');
                let dataTable3 = new simpleDatatables.DataTable(table3);
            </script>
            <?php include 'footer.php'; ?>

        </div>
    </div>

</body>