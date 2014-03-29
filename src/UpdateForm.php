<?php
require_once 'Dao.class.php';

$dao = new Dao();

$getId = $_GET['id'];

?>

<html>
<head>
        <meta charset="UTF-8">
        <style>
            #container{
                margin: 0 auto;
                width: 500px;
                height: 60px;
                background: #ccc;
                padding: 20px 0 30px 0;
            }
            form{
                background:#bc4448;
                border: 1px solid white;
                width: 300px;
                color: white;
                
            }
        </style>
    </head>
    <body>
    <center style="background:#666; padding: 10px 0 10px 0;">
      <div id="container">  
        <form action="../Update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $getId?>"/>
            <label>Edite seu Lembrete</label>
            <br>
            <input type="text" name="checklist">
            <br>
            <input type="submit" value="ALTERAR" />
            <input type="button" value="EXIBIR" onclick="javascript: location.href='../Exibir.php';">
            <input type="button" value="INICIO" onclick="javascript: location.href='../index.php';">
        </form>
      </div>
    </body>
</html>
