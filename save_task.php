<?php
include('db.php');

//si existe save_task como btn entonces ejecuta este codigo
if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    
    $query = "INSERT INTO task(tittle, description) VALUES('$title', '$description')";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die('query failed');
    }
    //mensaje que deja despues de grabar los datos
    $_SESSION['message'] = 'Task Save Succesful';
    $_SESSION['message_type'] = 'success';

    //redireccionar a una pagina
    header("Location: index.php");
}

?>