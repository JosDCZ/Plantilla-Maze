<?php include 'header.php'; ?>

<body>
    <div id="app">

        <?php $page = 'home';
        include 'nav_bar.php';  ?>
        <?php include 'navbar-horizontal.php';  ?>
    </div>
    <div id="main">

        <div class="page-content">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Ficha Personal</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-12 text-center pb-2 ">
                                <img src="../assets/images/logo/usuario.png" class="img-fluid" alt="...">
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="row p-0">
                                    <div class="col-md-2 col-12 d-flex pe-0">
                                        <div class="position-relative  p-1">
                                            <input type="text" class="form-control p-0 bg-white" placeholder="E1563" id="oni" disabled="true">

                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12 d-flex justify-content-center p-0">
                                        <div class="position-relative  p-1" style="width:100%">
                                            <!-- <input type="text" class="form-control" placeholder="Activo" id="estado"> -->
                                            <input type="text" class="form-control p-0 bg-white" placeholder="Juan Carlos Ramirez Valencia" id="oni" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12 d-flex justify-content-center p-0">
                                        <div class="position-relative  p-1" style="width:100%">
                                            <!-- <input type="text" class="form-control" placeholder="Activo" id="estado"> -->
                                            <select class="form-select bg-success text-white " aria-label="Default select example" disabled="true">
                                                <option value="1">Activo</option>
                                                <option value="2">Inactivo</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex justify-content-center ps-0">
                                        <div class="position-relative  p-1" style="width:100%">
                                            <select class="form-select " aria-label="Default select example" disabled="true">
                                                <option value="1">Disponible</option>
                                                <option value="2">No Disponible</option>

                                            </select>

                                        </div>
                                    </div>

                                </div>



                                <div class="row">


                                    <div class="col-md-2 col-12 d-flex pe-0">
                                        <div class="position-relative  p-1">
                                            <input type="text" class="form-control p-0 bg-white" placeholder="45 años" id="edad" disabled="true">

                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12 d-flex justify-content-center p-0">
                                        <div class="position-relative  p-1" style="width:100%">
                                            <!-- <input type="text" class="form-control" placeholder="Activo" id="estado"> -->
                                            <input type="text" class="form-control p-0 bg-white" placeholder="Sub-delegacion San Vicente" id="lugar" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-12 d-flex justify-content-center p-0">
                                        <div class="position-relative  p-1" style="width:100%">
                                            <!-- <input type="text" class="form-control" placeholder="Activo" id="estado"> -->
                                            <input type="text" class="form-control p-0 bg-white" placeholder="Agente" id="categoria" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex justify-content-center ps-0">
                                        <div class="position-relative  p-1" style="width:100%">
                                            <input type="text" class="form-control p-0 bg-white" placeholder="Masculino" id="categoria" disabled>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-12  justify-content-center">
                            <ul class="nav nav-tabs p-0 text-center" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Área Personal</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Licencias</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Educación</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Familia</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!-- acordeon 1 area personal-->
                                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    <h6 class="m-0">Datos Personales </h6>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <table class="table table-borderless" id="formatoorden">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">DUI</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="00000000-0" id="Id-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-credit-card-2-front"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td width="300">
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">Género</label>
                                                                        <br>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Masculino
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                                Femenino
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">Tipo de sangre</label>
                                                                        <select class="form-select" aria-label="Default select example">
                                                                            <option selected>Seleccione una opción</option>
                                                                            <option value="1">O negativo</option>
                                                                            <option value="2">ORH positivo</option>
                                                                            <option value="3">A negativo</option>
                                                                            <option value="4">ARH positivo</option>
                                                                            <option value="5">B negativo</option>
                                                                            <option value="6">BRH positivo</option>
                                                                            <option value="7">AB negativo</option>
                                                                            <option value="8">ABRH positivo</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">NIT</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="00-000-000-0" id="Id-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-credit-card-2-front"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">Estado civil</label>
                                                                        <select class="form-select" aria-label="Default select example">
                                                                            <option selected>Seleccione una opción</option>
                                                                            <option value="1">Soltero</option>
                                                                            <option value="2">Casado</option>
                                                                            <option value="3">Viudo</option>
                                                                            <option value="3">Divorciado</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">Estatura</label>
                                                                        <div class="position-relative">
                                                                            <input type="number" class="form-control" value="4.5" data-decimals="2" min="0" max="9" step="0.01" />
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person-lines-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">ISSS</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="0000000" id="Id-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-credit-card-2-front"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Nombre-icon">Dirección</label>
                                                                        <div class="position-relative">
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-geo-alt"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">Peso</label>
                                                                        <div class="position-relative">
                                                                            <input type="number" class="form-control" value="4.5" data-decimals="2" min="0" max="9" step="0.01" />
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person-lines-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Nombre-icon">Nombre</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="Juan Carlos" id="Nombre-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Apellido-icon">Lugar de Nacimiento</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="San Vicente" id="Apellido-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-geo"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Correo-icon">Fecha de Ingreso a PNC</label>
                                                                        <div class="position-relative">
                                                                            <input type="date" class="form-control" placeholder="" id="Id-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Apellido-icon">Apellido</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="Perez Soza" id="Apellido-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Correo-icon">Correo Personal</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="jose145@gmail.com" id="Correo-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-envelope"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Nombre-icon">Señales Especiales</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="Ninguna" id="Nombre-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-heart-half"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Id-icon">Fecha de Nacimiento</label>
                                                                        <div class="position-relative">
                                                                            <input type="date" class="form-control" placeholder="" id="Id-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                </div>
                                                </td>
                                                <td>
                                                    <div class="form-group has-icon-left">
                                                        <label for="Correo-icon">Correo Institucional</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" placeholder="jose145@pnc.com" id="Correo-icon">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-envelope"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group has-icon-left">
                                                        <label for="Apellido-icon">Fotografía</label>
                                                        <div class="position-relative">
                                                            <input class="form-control" type="file" id="formFile">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-camera"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
            <!---------------------------------Telefonos---------------------------------------------------->
                                    <?php include 'modal/md_telefono.php'; ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <h6 class="m-0">Teléfonos</h6>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="card">

                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <table class="table table-striped" id="table1">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Número de teléfono</th>
                                                                        <th>Tipo</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>7070 8282</td>
                                                                        <td>Personal</td>

                                                                        <td>
                                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#md_cel" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7060 8182</td>
                                                                        <td>Institucional</td>

                                                                        <td>
                                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#md_cel" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7060 </td>
                                                                        <td>Casa</td>

                                                                        <td>
                                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#md_cel" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

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
        
           <!-----------------------------------Enfermedades-------------------------------------------------->
                                    <?php include 'modal/modal_enfermedad.php'; ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <h6 class="m-0">Enfermedades</h6>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <table class="table table-striped" id="table1">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Fecha Detección</th>
                                                                        <th>Enfermedad</th>
                                                                        <th>Vigencia</th>
                                                                        <th>Documentacion</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>22/02/2021</td>
                                                                        <td>Diabetes</td>
                                                                        <td>Vigente</td>
                                                                        <td>doc.pdf</td>

                                                                        <td>
                                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#md_enfermedad" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>22/02/2020</td>
                                                                        <td>Artritis</td>
                                                                        <td>Vigente</td>
                                                                        <td>doc1.pdf</td>

                                                                        <td>
                                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#md_enfermedad" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>22/02/2019</td>
                                                                        <td>Asma</td>
                                                                        <td>Vigente</td>
                                                                        <td>doc11.pdf</td>

                                                                        <td>
                                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#md_enfermedad" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

                                                                        </td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                               
                                            </div>
                                        </div>
                                    </div>
        <!-----------------------------Discapacidades-------------------------------------------------->
                        <?php include 'modal/md_discapacidad.php'; ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <h6 class="m-0">Discapacidades</h6>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <table class="table table-striped" id="table1">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Discapacidad</th>
                                                                        <th>Fecha Inicio</th>
                                                                        <th>Fecha Fin</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Sensorial</td>
                                                                        <td>22/02/2019</td>
                                                                        <td>22/02/2020</td>

                                                                        <td>
                                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#modaldiscapacidad" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                <!--fin de acordeon 1 area personal-->

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h6 class="m-0">ONI</h6>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card">

                                        <div class="card-content">
                                            <div class="card-body">
                                                <table class="table table-striped" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <th>ONI</th>
                                                            <th>Fecha de asignación</th>
                                                            <th>Estado</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>E1563</td>
                                                            <td>13 / 01 / 2000</td>
                                                            <td>
                                                                <span class="badge bg-success">Active</span>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h6 class="m-0">Promoción</h6>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card">

                                        <div class="card-content">
                                            <div class="card-body">
                                                <table class="table table-striped" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <th>Promoción</th>
                                                            <th>Año de promoción</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1221563</td>
                                                            <td>13 / 01 / 2000</td>

                                                            <td>
                                                                <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h6 class="m-0">Arma</h6>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card">

                                        <div class="card-content">
                                            <div class="card-body">
                                                <table class="table table-striped" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <th>Marca</th>
                                                            <th>Tipo</th>
                                                            <th>Serie</th>
                                                            <th>Modelo</th>
                                                            <th>Calibre</th>
                                                            <th>Balistica</th>
                                                            <th>Fecha asignación</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Beretta</td>
                                                            <td>Pistola semiautomatica</td>
                                                            <td>S1020</td>
                                                            <td>Beretta 92</td>
                                                            <td>9 mm</td>
                                                            <td>50 m</td>
                                                            <td>13 / 01 / 2000</td>

                                                            <td>
                                                                <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <h6 class="m-0">Licencia arma</h6>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h6>En mantenimiento</h6>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <h6 class="m-0">Licencia conducir</h6>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card">

                                        <div class="card-content">
                                            <div class="card-body">
                                                <table class="table table-striped" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <th>Numero licencia</th>
                                                            <th>Tipo de licencia</th>
                                                            <th>Fecha renovación</th>
                                                            <th>permiso</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1221563</td>
                                                            <td>Liviana</td>
                                                            <td>13 / 01 / 2010</td>
                                                            <td>Denegado</td>

                                                            <td>
                                                                <button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button>
                                                                <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>

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

                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h6 class="m-0">Promoción</h6>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h6 class="m-0">Licencia arma</h6>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h6 class="m-0">Licencias conducir</h6>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h6 class="m-0">ONI</h6>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="familia" role="tabpanel" aria-labelledby="contact-tab">
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
    </div>
    </div>

    <?php include 'footer.php'; ?>
    </div>

</body>