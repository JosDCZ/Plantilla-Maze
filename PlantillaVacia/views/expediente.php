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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'footer.php'; ?>
        </div>

</body>