<?php
require_once 'Dao.class.php';

$dao = new Dao();

$getId = $_GET['id'];

$dao->Delete($getId);
?>
<html>
    <head>
        <style>
            .insert{
                background: #666;
                color: #ccc;
                font-size: 40px;
            }
        </style>
    </head>
</html>
