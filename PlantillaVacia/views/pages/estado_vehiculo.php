<?php include '../layouts/header.php'; ?>

<body>
    <div id="app">
        <!-- <div id="sidebar" class="active">-->
        <?php $page = 'vehiculos';
        $item = '3';
        include '../layouts/nav_bar.php';  ?>
        <?php include '../layouts/navbar-horizontal.php';  ?>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading row justify-content-center">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Estados de vehiculos</h3>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 order-md-1 order-last">
                                    <h5>Crear estado de vehiculos</h5>
                                </div>
                            </div>
                            <div class="form-group has-icon-left">
                                <label for="tipo-vehiculo-icon">Estado</label>
                                <div class="d-flex flex-column flex-sm-row justify-content-start">
                                    <div class="mb-2">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="MANTENIMIENTO" id="tipo-vehiculo-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-truck"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ms-sm-2">
                                        <button type="button" class="btn btn-primary" onclick="validarCampos()">
                                            <span>Guardar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tabla">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Estado de vehiculo</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MANTENIMIENTO PREVENTIVO</td>
                                            <td>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>COMISION NO TRANSFERIBLE</td>
                                            <td>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CUBRIENDO SERVICIOS</td>
                                            <td>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PRESTADO A OTRA UNIDAD POLICIAL</td>
                                            <td>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>FALLA MECANICA</td>
                                            <td>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ACCIDENTADO</td>
                                            <td>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>FALTA DE LLANTAS</td>
                                            <td>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-secondary mb-1 mb-sm-0"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </section>
            <script src="../../assets/vendors/simple-datatables/simple-datatables.js"></script>
            <script>
                // Simple Datatable
                let table1 = document.querySelector('#table1');
                let dataTable = new simpleDatatables.DataTable(table1);
            </script>

        </div>
        <?php include '../layouts/footer.php'; ?>
    </div>

</body>