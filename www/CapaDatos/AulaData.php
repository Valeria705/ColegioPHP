<?php
include './CapaEntidades/Aula.php';
class AulaData
{
    public function ConsultarAulas()
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

        $sql = "SELECT * FROM Aula";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            $al = new Aula();
            $al->setIdAula($row["Id_Aula"]);
            $al->setNomAula($row["Nom_Aula"]);
        
       
            $list[] = $al;
        }
          
      
        $conn->close();

        return $list;
    }
    public function InsertarAula($Aula)
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

        $sql = "INSERT INTO Aula (Id_Aula, Nom_Aula) VALUES ('".$Aula->getIdAula()."', '".$Aula->getNomAula()."');";
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function ConsultarAula($idAl)
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

        $sql = "SELECT * FROM Aula WHERE Id_Aula='".$idAl."' ";
        $result = $conn->query($sql);

        $al = null;
        if($row = $result->fetch_assoc()) {
            $al = new Aula();
            $al->setIdAula($row["Id_Aula"]);
            $al->setNomAula($row["Nom_Aula"]);
            
       
            
        }
        $conn->close();

        return $al ;
    }
    public function ModificarAula($Aula)
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

        $sql = "UPDATE  Aula SET  Nom_Aula ='".$Aula->getNomAula()."' WHERE Id_Aula='". $Aula->getIdAula() ."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function EliminarAula($id)
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

        $sql = " DELETE FROM Aula WHERE  Id_Aula='".$id."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }


}

?>