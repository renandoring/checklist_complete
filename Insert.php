<?php
/*
 * Description of GetMetod
 *
 * @author renan
 */
//Chamando classe CRUD
require_once 'Dao.class.php';
//Instanciando classe DAO
$dao = new Dao();
//Recebendo valores vindos do formulario
$getId = $_POST['id'];
$checklist = $_POST['checklist'];
if($checklist === ""){
    echo "<span class='alert'>INSIRA UM VALOR VÁLIDO!</span>";
    \header("refresh: 2; url=index.php");
}else{
    //Chamando método INSERT -> CRUD
    $dao->Insert($checklist);    
}

    
//20141543082372 - 
?>
<html>
    <head>
        <style>
            .insert{
                background: #666;
                color: #ccc;
                font-size: 50px;
            }
            .alert{
                color: red;
                font-size: 70px;
                background: black;
            }
        </style>
    </head>
</html>
