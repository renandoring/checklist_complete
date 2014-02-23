<?php
include_once 'Dao.class.php';
include_once 'Connection.class.php';

$conn = new Connection();
$conn->Connect();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            #container{
                margin: 0 auto;
                width: 500px;
                height: 80px;
                background: #ccc;
                padding: 20px 0 10px 0;
            }
            form{
                background:#eae9e9;
                width: 300px;
                
            }
        </style>
    </head>
    <body>
    <center style="background:#666; padding: 10px 0 10px 0;">
        <div id="container">
            <form action="Insert.php" method="post">
                <table>
                <input type="hidden" name="id" />
                <label>Insira um novo lembrete</label><input type="text" name="checklist">
                <br>
                <input type="submit" value="ENVIAR" name="">
                <input type="button" value="EXIBIR" onclick="javascript: location.href='Exibir.php';">
            </form>
        </div>
    </center>
    </body>
</html>
