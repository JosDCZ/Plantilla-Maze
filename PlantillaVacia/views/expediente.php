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
                            <h5 class="card-title">Horizontal Navs</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-12 text-center pb-2 ">
                                    <img src="../assets/images/logo/usuario.png" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="position-relative  pb-1">
                                        <input type="text" class="form-control" placeholder="01236201-6" id="dui">

                                    </div>
                                    <div class="position-relative  pb-1">
                                        <input type="text" class="form-control" placeholder="Juan Carlos" id="nombre">

                                    </div>
                                    <div class="position-relative  pb-1">
                                        <input type="text" class="form-control" placeholder="Ramirez Valencia" id="apellido">

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12 d-flex">
                                            <div class="position-relative  pb-1">
                                                <input type="text" class="form-control" placeholder="45 años" id="edad">

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex">
                                            <div class="position-relative  pb-1">
                                                <input type="text" class="form-control" placeholder="Masculino" id="sexo">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="position-relative  pb-1">
                                        <input type="text" class="form-control" placeholder="01236201-6" id="dui">

                                    </div>
                                    <div class="position-relative  pb-1">
                                        <input type="text" class="form-control" placeholder="Juan Carlos" id="nombre">

                                    </div>
                                    <div class="position-relative  pb-1">
                                        <input type="text" class="form-control" placeholder="Ramirez Valencia" id="apellido">

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12 d-flex">
                                            <div class="position-relative  pb-1">
                                                <input type="text" class="form-control" placeholder="45 años" id="edad">

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 d-flex">
                                            <div class="position-relative  pb-1">
                                                <input type="text" class="form-control" placeholder="Masculino" id="sexo">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12  justify-content-center">
                                    <ul class="nav nav-tabs p-0 text-center" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Familia</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#ps" role="tab" aria-controls="contact" aria-selected="false">Permisos y sanciones</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

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
                                        <!-- div -->
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            <h6 class="m-0">Datos Personales</h6>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <h6 class="m-0">Datos Personales</h6>
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
                                                            <h6 class="m-0">Datos Personales</h6>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <!-- permisos y sanciones -->
                                        <div class="tab-pane fade" id="ps" role="tabpanel" aria-labelledby="profile-tab">
                                            <br>
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            <h6 class="m-0">Permisos</h6>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">

                                                            <br>
                                                            <div class="row">


                                                                <div class="col-md-6 col-12">
                                                                    <!-- empieza formulario permiso con goce -->

                                                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon"><b>Tipo de permiso</b></label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                <b>Con goce de sueldo</b>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                <b>Sin goce de sueldo</b>
                                            </label>
                                        </div>

                                    </div>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Apellido-icon">DUI del solicitante</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="12345679-0" id="Apellido-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-credit-card-2-front"></i>
                                                                            </div>

                                                                        </div>
                                                                        <!-- aqui se obtendia el nombre del policia atravez de su dui -->
                                                                        <medium class="text-muted">*Nombre de personal*</medium>
                                                                    </div>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Apellido-icon">DUI del jefe inmediato</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="12345679-0" id="Apellido-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-credit-card-2-front"></i>
                                                                            </div>

                                                                        </div>
                                                                        <!-- aqui se obtendia el nombre del policia atravez de su dui -->
                                                                        <medium class="text-muted">*Nombre de personal*</medium>
                                                                    </div>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Apellido-icon">DUI del jefe inmediato superior</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="12345679-0" id="Apellido-icon">
                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-credit-card-2-front"></i>
                                                                            </div>

                                                                        </div>
                                                                        <!-- aqui se obtendia el nombre del policia atravez de su dui -->
                                                                        <medium class="text-muted">*Nombre de personal*</medium>
                                                                    </div>

                                                                    
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Apellido-icon">Motivo</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control" placeholder="" id="Apellido-icon">
                                                                            <div class="form-control-icon">
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Correo-icon">Fecha de inicio</label>
                                                                        <div class="position-relative">
                                                                            <?php $hoy = getdate(); ?>
                                                                            <input type="date" max="<?php $hoy = date("Y-m-d");
                                                                            echo $hoy; ?>" class="form-control" placeholder="" id="Id-icon">

                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group has-icon-left">
                                                                        <label for="Correo-icon">Fecha de fin</label>
                                                                        <div class="position-relative">
                                                                            <?php $hoy = getdate(); ?>
                                                                            <input type="date" min="<?php $hoy = date("Y-m-d");
                                                                            echo $hoy; ?>" class="form-control" placeholder="" id="Id-icon">

                                                                            <div class="form-control-icon">
                                                                                <i class="bi bi-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group has-icon-left">
                                    
                                        
                                    
                                <label for="Id-icon">Motivo de permiso</label>
                                <div class="input-group">
                                <select class="form-select">
                                    <option value="square">Seleccione...</option>
                                    <option value="square">Opcion 1</option>
                                    <option value="square">Opcion 2</option>
                                    <option value="square">Opcion 3</option>
                                </select>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#md_addmotivo" type="button" id="inputGroupFileAddon04">Agregar</button>

                                 </div>
                            </div>
                            <input type="checkbox" class="form-check-input" id="checkbox2">
                                <label for="checkbox2">Aprovado</label>
                            <div class="form-group has-icon-left">
                                        <label for="Apellido-icon">Imagen</label>
                                        <div class="position-relative">
                                            <input class="form-control" type="file" id="formFile">
                                            <div class="form-control-icon">
                                                <i class="bi bi-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Nombre-icon">Observaciones</label>
                                        <div class="position-relative">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                            <div class="form-control-icon">
                                                
                                            </div>
                                        </div>
                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
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
                                                            <br>
                                                            <!-- termina formulario de permiso  -->
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            <h6 class="m-0">Sanciones</h6>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <strong>Titulo</strong>
                                                            Aqui va el formulario
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal extra de permisos -->

                <div class="modal fade text-left" id="md_addmotivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title white" id="myModalLabel16">Registro de nuevo motivo
                                </h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="">
                                        
                                        

                                        <div class="form-group has-icon-left">
                                            <label for="Apellido-icon">Motivo</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Ingrese nombre de enfermedad" id="Apellido-icon">
                                                <div class="form-control-icon">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        

                                        
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
                                    <span class="d-none d-sm-block">Registrar</span>
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin de modal add motivo -->
                <?php include 'footer.php'; ?>
            </div>

        </body>