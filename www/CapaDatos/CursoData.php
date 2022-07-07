<?php
include './CapaEntidades/Curso.php';
class CursoData
{
    public function ConsultarCursos()
    {
        $list= [];  

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Colegio";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Curso";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            $al = new Curso();
            $al->setIdCurso($row["Id_Curso"]);
            $al->setNomCurso($row["Nom_Curso"]);
        
       
            $list[] = $al;
        }
          
      
        $conn->close();

        return $list;
    }
    public function InsertarCurso($Curso)
    {
        

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Colegio";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO Curso (Id_Curso, Nom_Curso) VALUES ('".$Curso->getIdCurso()."', '".$Curso->getNomCurso()."');";
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function ConsultarCurso($idAl)
    {
        $list= [];  

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Colegio";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Curso WHERE Id_Curso='".$idAl."' ";
        $result = $conn->query($sql);

        $al = null;
        if($row = $result->fetch_assoc()) {
            $al = new Curso();
            $al->setIdCurso($row["Id_Curso"]);
            $al->setNomCurso($row["Nom_Curso"]);
            
       
            
        }
        $conn->close();

        return $al ;
    }
    public function ModificarCurso($Curso)
    {
        

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Colegio";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE  Curso SET  Nom_Curso ='".$Curso->getNomCurso()."' WHERE Id_Curso='". $Curso->getIdCurso() ."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function EliminarCurso($id)
    {
        

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Colegio";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = " DELETE FROM Curso WHERE  Id_Curso='".$id."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }


}

?>