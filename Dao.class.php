<?php
include_once 'Connection.class.php';

class Dao extends Connection{
    //Funcao de busca no banco
    function Select(){
        try{
           $conn = new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname, $this->username, $this->password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
           $stmt = "SELECT id, checklist FROM list";
           foreach ($conn->query($stmt) as $row){
               echo "<div id='text'>";
               echo "<div id='container'>";
               echo "<div class='checkbox'>";
               echo "<input type='checkbox'>"."<label class='tamanho'>".$row['checklist']."</label>";
               echo "</div>";
               echo "<a href='/checklist/Delete.php/?id={$row['id']}' class='links' class='delete'>"."Apagar"."</a>";
               echo "<a href='/checklist/UpdateForm.php/?id={$row['id']}' class='links'>"."Alterar"."</a>";
               echo "</div>";
               echo "</div>";
           }
          echo "<center>";
          echo "PRODUTOS SELECIONADOS COM SUCESSO!";
          echo "<a href='index.php'><input type='button' value='INICIO'/></a>";
          echo "</center>";
        } catch (Exception $ex) {echo "ERROR: " . $ex->getMessage();}
    }
    //Funcao Insere no banco
    function Insert($checklist){        
        try{
            $conn = new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
            $stmt = $conn->prepare("INSERT INTO list (id,checklist) VALUES ('','$checklist')");
            $stmt->execute();
            echo "<center class='insert'>INSERIDO COM SUCESSO!"."</center>"."\n";
            \header("refresh: 2; url=Exibir.php");
        } catch (Exception $ex) {echo "ERROR: " . $ex->getMessage();}
    }
    
    //Funcao Delete elementos do banco
    function Delete($getId){
        try{
            $conn = new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
            $stmt = $conn->prepare('DELETE FROM list WHERE id = :id');
            $stmt->bindParam(':id', $getId);
            $exStmt = $stmt->execute();
            if($exStmt === TRUE){
                echo "<center class='insert'>"."OPERACAO REALIZADA COM SUCESSO!"."</center>"."\n";
                \header("refresh: 2; url=../Exibir.php");
            }else{echo "OPERAÇÂO NÂO REALIZADA!";}
        } catch (Exception $ex) {echo "ERROR: " . $ex->getMessage() . $ex->getLine();
        }
    }
    
    function Update($checklist,$getId){
        try{
            $conn = new PDO('mysql:host='.$this->hostname.';dbname='.$this->dbname, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('UPDATE list SET checklist = :checklist WHERE id = :id'); 
            $updateStmt = $stmt->execute(array(':checklist' => $checklist,':id'=> $getId)); 
            if($updateStmt === TRUE){
                echo "<center class='insert'>"."GRAVADA COM SUCESSO!"."</center>";
                \header("refresh: 4; url=Exibir.php");
            }else{
                echo "OPERAÇÂO NÂO REALIZADA!";
            }
        } catch (Exception $ex) {echo "ERROR: " . $ex->getMessage();}
    }
}
?>