<?php

header('Content-Type: application/json');

require("conexion.php");

$conexion = regresarConexion();


switch ($_GET['accion']) {
    case 'listar':

     /* "select id, 
        titulo as title, 
        descripcion, 
        inicio as start,
        fin as end, 
        colordeltexto as textColor,
        colordefondo as backgroundColor
        from eventostecnicos" */ 
        break;

    case 'agregar':
       /* "insert into eventostecnicos (titulo, descripcion, inicio, fin, colordeltexto, colordefondo)
        values                            ('$_POST[titulo]','$POST[descripcion]','$_POST[inicio]','$_POST[fin]','$_POST[colordeltexto]','$_POST[colordefondo]')"; */ 



       
        break; 

    case 'modificar':

        /*"update eventostecnicos set titulo = '$_POST[titulo],
                                    descripcion = '$_POST[descripcion],
                                    inicio = '$_POST[inicio],
                                    fin = '$_POST[fin],
                                    colordeltexto = '$_POST[colordeltexto],
                                    colordefondo= '$_POST[colordefondo] 
                                    where id = $_POST[id]"; */
        break;

    case 'borrar':
       /* "delete from eventostecnicos where id = $_POST[id]";*/



        break;
}

?>