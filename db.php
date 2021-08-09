<?php 
session_start();

//CADENA DE CONEXION MYSQL
$conn = mysqli_connect(
    'localhost', //ip o dominio donde se encuentra la base de datos
    'root', //usuario de base de datos
    '',  //contraseña de usuario
    'crud-php' //base de datos a conectar
    );

 
 //   if(isset($conn)){
 //       echo 'conectado a la base de datos';
 //   } este trozo de codigo sirve para probar la conexion con base de datos



?>