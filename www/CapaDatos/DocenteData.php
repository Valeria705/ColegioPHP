<?php
include './CapaEntidades/Docente.php';
class DocenteData
{
    public function ConsultarDocentes()
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

        $sql = "SELECT * FROM Docente";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            $al = new Docente();
            $al->setIdDocente($row["ID_Docente"]);
            $al->setDirDocente($row["Dire_Docente"]);
            $al->setNomDocente($row["Nom_Docente"]);
            $al->setTelDocente($row["Tel_Docente"]);
       
            $list[] = $al;
        }
          
      
        $conn->close();

        return $list;
    }
    public function InsertarDocente($Docente)
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

        $sql = "INSERT INTO Docente (ID_Docente, Nom_Docente, Dire_Docente, Tel_Docente) VALUES ('".$Docente->getIdDocente()."', '".$Docente->getNomDocente()."', '".$Docente->getDirDocente()."', '".$Docente->getTelDocente()."');";
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function ConsultarDocente($idAl)
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

        $sql = "SELECT * FROM Docente WHERE Id_Docente='".$idAl."' ";
        $result = $conn->query($sql);

        $al = null;
        if($row = $result->fetch_assoc()) {
            $al = new Docente();
            $al->setIdDocente($row["ID_Docente"]);
            $al->setDirDocente($row["Dire_Docente"]);
            $al->setNomDocente($row["Nom_Docente"]);
            $al->setTelDocente($row["Tel_Docente"]);
       
            
        }
        $conn->close();

        return $al ;
    }
    public function ModificarDocente($Docente)
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

        $sql = "UPDATE  Docente SET  Nom_Docente ='".$Docente->getNomDocente()."', Dire_Docente ='".$Docente->getDirDocente()."', Tel_Docente='".$Docente->getTelDocente()."' WHERE ID_Docente='". $Docente->getIdDocente() ."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function EliminarDocente($id)
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

        $sql = " DELETE FROM Docente WHERE  ID_Docente='".$id."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }


}

?>