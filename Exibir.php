<?php
include_once 'Dao.class.php';
include_once 'Connection.class.php';

$conn = new Connection();
$conn->Connect();

$dao = new Dao();
$dao->Select();
?>
<html>
    <title></title>
    <head>
        <style>
            #text{
                background:white;
                height: 23px
            }
            #container{
                background: white;
                margin: 0 auto;
                width: 565px;
                height: 50px;
            }
            .checkbox{
                float: left;
                background:#ccc;
                width: 400px;
                border: 1px solid black;
            }
            .links{
                float: left;
                background:#000;
                color:white;
                padding:2px 10px 0px 10px;
                border: 1px solid white;
            }
            input[type=checkbox]:checked + label {
                    color: red;
                    font-style: italic;
                    text-decoration: line-through;
                  }
        </style>
    </head>
<body>
</body>
</html>