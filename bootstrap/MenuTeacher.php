<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 8/10/14
 * Time: 10:44 PM
 */
require("Seguridad2.php");
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 2/10/14
 * Time: 07:52 PM
 */
?>
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="indexTeacher.php">Sistema Escolar</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               <!--<li><a href="TestUsuario.php">Administrar Usuarios</a></li>-->
                <li><a href="ajaxTeacher.php">Materias Asignadas</a></li>
                <!-- <li><a href="Asignargrupo.php">Asignar Grupos</a></li>
                 <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                         <li><a href="#">Action</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something else here</a></li>
                         <li class="divider"></li>
                         <li class="dropdown-header">Nav header</li>
                         <li><a href="#">Separated link</a></li>
                         <li><a href="#">One more separated link</a></li>
                     </ul>
                 </li>-->
                 <li><a href="Cerrarsecion.php">Salir</a></li>
             </ul>
         </div><!--/.nav-collapse -->
    </div>
</nav>
