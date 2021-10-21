<?php include 'header.php'; ?>

<body>
    <div id="app">

        <?php $page = 'home';
        include 'nav_bar.php';  ?>
        <?php include 'navbar-horizontal.php';  ?>
    </div>
    <div id="main">


        <!-- <div class="page-heading">
                <h3>Pagina principal</h3>
            </div> -->
        <p class="">
        <h5>Estadistica Departamental</h5>
        </p>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">

                    <div class="row">
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card border-bottom border-success">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon bg-success">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Activos</h6>
                                            <h6 class="font-extrabold mb-0">1120</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card border-bottom border-info">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon bg-info">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Disponibles</h6>
                                            <h6 class="font-extrabold mb-0">183</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Vehiculos</h6>
                                                <h6 class="font-extrabold mb-0">80</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        <div class="col-6 col-lg-4 col-md-6 ">
                            <div class="card border-bottom border-danger">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon bg-danger">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Inactivos</h6>
                                            <h6 class="font-extrabold mb-0">112</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Horizontal Navs</h5>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <p>
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                    <div class="card card-body">
                                                        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                    <div class="card card-body">
                                                        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        Integer interdum diam eleifend metus lacinia, quis gravida eros mollis.
                                        Fusce non sapien
                                        sit amet magna dapibus
                                        ultrices. Morbi tincidunt magna ex, eget faucibus sapien bibendum non. Duis
                                        a mauris ex.
                                        Ut finibus risus sed massa
                                        mattis porta. Aliquam sagittis massa et purus efficitur ultricies. Integer
                                        pretium dolor
                                        at sapien laoreet ultricies.
                                        Fusce congue et lorem id convallis. Nulla volutpat tellus nec molestie
                                        finibus. In nec
                                        odio tincidunt eros finibus
                                        ullamcorper. Ut sodales, dui nec posuere finibus, nisl sem aliquam metus, eu
                                        accumsan
                                        lacus felis at odio. Sed lacus
                                        quam, convallis quis condimentum ut, accumsan congue massa. Pellentesque et
                                        quam vel
                                        massa pretium ullamcorper vitae eu
                                        tortor.
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <p class="mt-2">Duis ultrices purus non eros fermentum hendrerit. Aenean
                                            ornare interdum
                                            viverra. Sed ut odio velit. Aenean eu diam
                                            dictum nibh rhoncus mattis quis ac risus. Vivamus eu congue ipsum.
                                            Maecenas id
                                            sollicitudin ex. Cras in ex vestibulum,
                                            posuere orci at, sollicitudin purus. Morbi mollis elementum enim, in
                                            cursus sem
                                            placerat ut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Apellido</th>
                                            <th>Nombre</th>
                                            <th>ONI</th>
                                            <th>Estado</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cortez Carmona</td>
                                            <td>Josue Daniel</td>
                                            <td>076 4820 8838</td>
                                            <td>
                                                <span class="badge bg-success">Activo</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-secondary"><i class="bi bi-eye"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Osorio Rivaz</td>
                                            <td>Daniela Sarai</td>
                                            <td>076 4820 8838</td>
                                            <td>
                                                <span class="badge bg-danger">Inactivo</span>
                                            </td>
                                            <td>

                                                <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#completeModal"><i class="bi bi-eye"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sanchez Campos</td>
                                            <td>Marta Gloria</td>
                                            <td>076 4820 8838</td>
                                            <td>
                                                <span class="badge bg-success">Activo</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-secondary"><i class="bi bi-eye"></i></button>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Ultimos movimientos</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                    <use xlink:href="../assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">Europe</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">862</h5>
                                        </div>
                                        <div class="col-12">
                                            <div id="chart-europe"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                                                    <use xlink:href="../assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">America</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">375</h5>
                                        </div>
                                        <div class="col-12">
                                            <div id="chart-america"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center">
                                                <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                                                    <use xlink:href="../assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                                <h5 class="mb-0 ms-3">Indonesia</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="mb-0">1025</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">375</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-america"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Indonesia</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">1025</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-indonesia"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Latest Comments</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Comment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-md">
                                                                <img src="../assets/images/faces/5.jpg">
                                                            </div>
                                                            <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                        </div>
                                                    </td>
                                                    <td class="col-auto">
                                                        <p class=" mb-0">Congratulations on your graduation!</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-md">
                                                                <img src="../assets/images/faces/2.jpg">
                                                            </div>
                                                            <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                    </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Wow amazing design! Can you make another tutorial for this design?</p>
                                    </td>
                                    </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- <div class="col-12 col-lg-3"> -->
        <!-- <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="../assets/images/faces/1.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Adminin</h5>
                                        <h6 class="text-muted mb-0">Jefatura</h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
        <!-- <div class="card">
                            <div class="card-header">
                                <h4>Notificaciones recientes</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="../assets/images/faces/4.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="../assets/images/faces/5.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Dean Winchester</h5>
                                        <h6 class="text-muted mb-0">@imdean</h6>
                                    </div>
                                </div>
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="../assets/images/faces/1.jpg">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">John Dodol</h5>
                                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                                    </div>
                                </div>
                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                        Conversation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div> -->

        <!-- </div> -->
        </section>
        <div class="modal fade text-left w-100" id="completeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-ms" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title" id="myModalLabel16" style="color:white">Vista previa
                        </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <div class="card align-items-center" style="width: auto;">
                            <img src="../assets/images/logo/usuario.png" class="card-img-top" alt="..." style="width: 35%; height: 35%">
                            <div class="card-body ">
                                <h5 class="card-title">Daniela Sarai Osorio Rivas</h5>
                                <p class="card-text ">Edad : 45 años</p>
                                <p class="card-text"> Estado : Inactivo</p>
                                <p class="card-text"> Rango : Agente</p>
                                <p class="card-text"> Fecha de Ingreso a la PNC : 10/10/1998</p>
                                <p class="card-text"> Tiempo Laborado : 15 años</p>
                                <p class="card-tex "> Observaciones : Se concedio una<br /> suspensión voluntaria sin goce de<br /> sueldo por un perido de 5 años</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal" onclick="Limpiar()">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Cancelar</span>
                        </button>
                        <button type="button" class="btn btn-primary ml-1" onclick="validarCampos()">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Más información</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <?php include 'footer.php'; ?>

    </div>
    </div>

</body>