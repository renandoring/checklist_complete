<?php
require_once 'Dao.class.php';

$dao = new Dao();

$getId = isset($_POST['id'])?$_POST['id']:"";
if(empty($getId)){
    echo "ID NAO INFORMADO!";
    exit();
}else{
    //echo $getId;
}

$checklist = isset($_POST['checklist'])?$_POST['checklist']:"";
if(empty($checklist)){
    echo "DADOS DO LEMBRETE NAO INFORMADO!";
    exit();
}else{
    echo "<center class='insert_dois'>"."Nova anotacao: ".$checklist."</center>";
}

$dao->Update($checklist, $getId);
?>
<html>
    <head>
        <style>
            .insert{
                background: #666;
                color: #ccc;
                font-size: 30px;
            }
            .insert_dois{
                background: #333;
                color: #ccc;
                font-size: 50px;
            }
        </style>
    </head>
</html>