<?php
include_once 'Dao.class.php';
include_once 'Connection.class.php';

$conn = new Connection();
$conn->Connect();

$dao = new Dao();
?>
<html>
    <title></title>
    <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        function clickTrue(id,checklist,ok){
            if(ok==1) {
                ok = 0;
            } else {
                ok = 1;
            }
            $.ajax({
            url: "clickTrue.php?id="+id+"&checklist="+checklist+"&ok="+ok,
            context: document.body
          });
        }
    </script>
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
    <?php
        $dao->Select();
    ?>
</body>
</html>