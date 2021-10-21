<?php include 'header.php'; ?>

<body>
    <div id="app">
        <!-- <div id="sidebar" class="active">-->
        <?php $page = 'unifor';
        $item = '3';
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