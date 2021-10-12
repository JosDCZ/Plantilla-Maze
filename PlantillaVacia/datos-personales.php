<?php include 'header.php'; ?>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <?php include 'nav_bar.php';  ?>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Datos personales</h3>
                            <br />
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                            </nav>
                        </div>
                    </div>
                </div>

                <!--Extra Large Modal -->


                <section id="basic-modals">
                    <div class="card">
                        <div class="card-header">

                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">DUI</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="00000000-0" id="Id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-credit-card-2-front"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">NIT</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="00-000-000-0" id="Id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-credit-card-2-front"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">ISSS</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="0000000" id="Id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-credit-card-2-front"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Nombre-icon">Nombre</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Juan Carlos" id="Nombre-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Apellido-icon">Apellido</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Perez Soza" id="Apellido-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">Fecha de Nacimiento</label>
                                        <div class="position-relative">
                                            <input type="date" class="form-control" placeholder="" id="Id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">Genero</label>
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
                                    <div class="form-group has-icon-left">
                                        <label for="Nombre-icon">Direccion</label>
                                        <div class="position-relative">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            <div class="form-control-icon">
                                                <i class="bi bi-geo-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">


                                    <div class="form-group has-icon-left">
                                        <label for="Apellido-icon">Lugar de Nacimiento</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="San Vicente" id="Apellido-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-geo"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Correo-icon">Correo Personal</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="jose145@gmail.com" id="Correo-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Correo-icon">Correo Institucional</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="jose145@pnc.com" id="Correo-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">Estatura</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" value="4.5" data-decimals="2" min="0" max="9" step="0.01" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-lines-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Id-icon">Peso</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" value="4.5" data-decimals="2" min="0" max="9" step="0.01" />
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-lines-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Correo-icon">Fecha de Ingreso</label>
                                        <div class="position-relative">
                                            <input type="date" class="form-control" placeholder="" id="Id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Nombre-icon">Señales Especiales</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Tatuje en la costilla" id="Nombre-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-heart-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-icon-left">
                                        <label for="Apellido-icon">Fotografia</label>
                                        <div class="position-relative">
                                            <input class="form-control" type="file" id="formFile">
                                            <div class="form-control-icon">
                                                <i class="bi bi-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </section>
                <?php include 'footer.php'; ?>

            </div>
        </div>

</body>