<?php

function consultaForo($nomForo) {
//obtenemos la conexion con la base de datos
    $con = dbConnection();
//creamos la consulta
    $consulta = "SELECT fo.titulo, fo.etiqueta FROM FORO fo WHERE fo.titulo = ?";

    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $consulta);
//metemos la variable a la consulta
    mysqli_stmt_bind_param($stmt, "s", $nomForo);
//ejecutamos la consulta
    mysqli_stmt_execute($stmt);
//guardamos el resultado de la consulta
    $resultado = mysqli_stmt_get_result($stmt);
//pasamos el resultado de la consulta a un array
    $fila = mysqli_fetch_assoc($resultado);
//devolvemos el resultado en orden titulo, etiqueta
    return $fila;
}

function crearForo($tituloForo) {
//obtenemos la conexion con la base de datos
    $con = dbConnection();
//creamos la consulta
    $crear = "INSERT INTO usuarios (?)";

    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $crear);
//metemos la variable a la consulta
    mysqli_stmt_bind_param($stmt, "s", $tituloForo);
//ejecutamos la consulta
    mysqli_stmt_execute($stmt);
//guardamos el resultado de la consulta
    $resultado = mysqli_stmt_get_result($stmt);
//devolvemos el resultado,si termino bien o mal la creacion
    return $resultado;
}

function borrarForo($idForo) {
//obtenemos la conexion con la base de datos
    $con = dbConnection();
//creamos la consulta
    $borrar = "DELETE FROM foro fo WHERE fo.id = ?";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $borrar);
//metemos la variable a la consulta
    mysqli_stmt_bind_param($stmt, "s", $idForo);
//ejecutamos la consulta
    mysqli_stmt_execute($stmt);
//guardamos el resultado de la consulta
    $resultado = mysqli_stmt_get_result($stmt);
//devolvemos el resultado,si termino bien o mal la creacion
    return $resultado;
}

        
        function modifForo($idForo,$foroTitulo,$foroEtiqueta) {
//obtenemos la conexion con la base de datos
    $con = dbConnection();
//creamos la consulta
    $borrar = "UPDATE foro SET titulo = ?, etiqueta = ? WHERE foro.id = ?";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $borrar);
//metemos la variable a la consulta
    mysqli_stmt_bind_param($stmt, "s", $idForo);
//ejecutamos la consulta
    mysqli_stmt_execute($stmt);
//guardamos el resultado de la consulta
    $resultado = mysqli_stmt_get_result($stmt);
//devolvemos el resultado,si termino bien o mal la creacion
    return $resultado;
}