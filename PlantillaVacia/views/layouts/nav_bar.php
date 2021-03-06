<div class="sidebar-wrapper active">
    <!-- <br> -->
    <div class="sidebar-header p-0 mt-4">
        <div class="d-flex justify-content-center">
            <div class="logo">
                <a href="../pages/index.php"><img src="../../assets/images/logo/pnc.png" alt="logo" style="height: 5rem;"></a>
            </div>

            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title"><b>
                    <h5>Menu principal</h5>
                </b></li>

            <li class="sidebar-item <?php if ($page == 'home') {
                                        echo 'active';
                                    } ?>">
                <a href="../pages/index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span><b>Inicio</b></span>
                </a>
            </li>
            <li class="sidebar-item  has-sub <?php if ($page == 'exp') {
                                                    echo 'active';
                                                } ?>">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span><b>Expediente</b></span>
                </a>
                <ul class="submenu  <?php if ($page == 'exp') {
                                        echo 'active';
                                    } ?>">
                    <li class="submenu-item <?php if ($item == '1') {
                                                echo 'active';
                                            } ?>  ">
                        <a href="../pages/nuevo_expediente.php"><b>Nuevo expediente</b></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="../pages/error404.php"><b>Expedientes</b></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item  has-sub <?php if ($page == 'unifor') {
                                                    echo 'active';
                                                } ?>">
                <a href="#" class='sidebar-link'>
                    <i class="bi-person-square"></i>
                    <span><b>Uniformes</b></span>
                </a>
                <ul class="submenu  <?php if ($page == 'unifor') {
                                        echo 'active';
                                    } ?>">
                    <li class="submenu-item <?php if ($item == '3') {
                                                echo 'active';
                                            } ?>  ">
                        <a href="../pages/asignacion_uniformes.php"><b>Asignar Uniformes</b></a>
                    </li>
                    <li class="submenu-item <?php if ($item == '4') {
                                                echo 'active';
                                            } ?>">
                        <a href="../pages/mantenimiento_uniformes.php"><b>Matenimiento uniformes</b></a>
                    </li>

                </ul>
            </li>
            <li class="sidebar-item  has-sub <?php if ($page == 'vehiculos') {
                                                    echo 'active';
                                                } ?>">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-truck"></i>
                    <span><b>Vehiculos</b></span>
                </a>
                <ul class="submenu <?php if ($page == 'vehiculos') {
                                        echo 'active';
                                    } ?>">
                    <li class="submenu-item <?php if ($item == '1') {
                                                echo 'active';
                                            } ?>">
                        <a href="../pages/vehiculos_asignaciones.php"><b>Vehiculos y asignaciones</b></a>
                    </li>
                    <li class="submenu-item <?php if ($item == '2') {
                                                echo 'active';
                                            } ?>">
                        <a href="../pages/tipo_vehiculo.php"><b>Tipos de vehiculos</b></a>
                    </li>
                    <li class="submenu-item <?php if ($item == '3') {
                                                echo 'active';
                                            } ?>">
                        <a href="../pages/estado_vehiculo.php"><b>Estados de vehiculos</b></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-wrench"></i>
                    <span><b>Armamento</b></span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="../pages/error404.php"><b>Nuevo expediente</b></a>
                    </li>
                    <li class="submenu-item ">
                        <a href="../pages/error404.php"><b>Mantenimiento de expediente</b></a>
                    </li>
                </ul>
            </li>

            <!-- CONSULTAS -->
                <li class="sidebar-item  has-sub <?php if ($page == 'con22') {
                    echo 'active';
                } ?>">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-truck"></i>
                    <span><b>Consultas</b></span>
                </a>
                <ul class="submenu <?php if ($page == 'con22') {
                    echo 'active';
                } ?>">
                <li class="submenu-item <?php if ($item == '1') {
                    echo 'active';
                } ?>">
                <a href="../consultas/consulta22.php"><b>Oficiales y su nivel academico</b></a>
            </li>
            
        
    </ul>
    </li>
        </ul>
        </ul>


    </div>

    <!-- <button class="sidebar-toggler btn x"><i data-feather="x"></i></button> -->
</div>
</div>
<!-- <script>
    $(".menu a").on("click", function(e) {
        $(".menu a").find(".active").removeClass("active");
        $(this).parent().addClass("active");
    });
</script> -->