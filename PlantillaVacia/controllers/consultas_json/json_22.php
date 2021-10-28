<?php 
require_once("../../config/Modelo_generico.php");
    $modelo = new Modelo_generico();

if (isset($_POST['consultar_datos']) && $_POST['consultar_datos']=="si_consultalos") {//si existe la variable x en post y esa variable es igual a la condicion, entonces
    
    $sql="SELECT *,(SELECT descripcion from tbl_carrera_oficio) as carrera,(SELECT nivel_academico from tbl_nivel_academico) as nivel FROM tbl_datos_personales";//sql que llama a todo de la tabla, se guarda en esta variable.
    $resultado=$modelo->get_query($sql);//resultado valdra lo que llama la instancia modelo ejecutando get_query que es un array.
    $html=$html_tr="";//la usaremos para hacer la vista de la tabla de los valores que tomara.
    $cuanto=0;//inicializa la variable que llevara el conteo de rows

    if ($resultado[0]=="1") {//en la ps 1 llevas la tabla si fuera 0 no lleva nada es error.
        foreach ($resultado[2] as $row) {//aqui los datos

            $html_tr.='<tr>
            <td>'.$row['dui_pk'].'</td>
            <td>'.$row['nit'].'</td>
            <td>'.$row['apellido'].'</td>
            <td>'.$row['nombre'].'</td>
            <td>'.$row['estado_civil'].'</td>
            <td>'.$modelo->formatear_fecha($row['fecha_nacimiento']).'</td>
            <td>'.$row['nivel'].'</td>
            <td>'.$row['carrera'].'</td>
            
            
            
            <td>
            </div>
            </td> 
            </tr>'; 
        }//FINALIZA LLENADO DE TR


        //AQUI ESTA LA VISTA HTML DE LA TABLA
        $html.='<table class="table table-striped" id="tb_con22" cellspacing="0" width="100%">
        <thead>
        <tr>
        <th>DUI</th>
        <th>NIT</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Estado civil</th>
        <th>Fecha nacimiento</th>
        <th>Nivel</th>
        <th>Carrera</th>
        
        
        </tr>
        </thead>
        <tbody>
        ';
        $html.=$html_tr;
        $html.='</tbody>
        </table>';

        print json_encode(array("Exito",$html,$resultado[4]));
    }else {
        print json_encode(array("Error",$resultado));
    }
    
}
?>