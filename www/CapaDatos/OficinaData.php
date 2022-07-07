<?php
include './CapaEntIdades/Oficina.php';
class OficinaData
{
    public function ConsultarOficinas()
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

        $sql = "SELECT * FROM Oficina";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            $al = new Oficina();
            $al->setIdOficina($row["Id_Oficina"]);
            $al->setNomOficina($row["Nom_Oficina"]);
            $al->setTelOficina($row["Tel_Oficina"]);
       
            $list[] = $al;
        }
          
      
        $conn->close();

        return $list;
    }
    public function InsertarOficina($Oficina)
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

        $sql = "INSERT INTO Oficina (Id_Oficina, Nom_Oficina, Tel_Oficina) VALUES ('".$Oficina->getIdOficina()."', '".$Oficina->getNomOficina()."', '".$Oficina->getTelOficina()."');";
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function ConsultarOficina($IdAl)
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

        $sql = "SELECT * FROM Oficina WHERE Id_Oficina='".$IdAl."' ";
        $result = $conn->query($sql);

        $al = null;
        if($row = $result->fetch_assoc()) {
            $al = new Oficina();
            $al->setIdOficina($row["Id_Oficina"]);
            $al->setNomOficina($row["Nom_Oficina"]);
            $al->setTelOficina($row["Tel_Oficina"]);
       
            
        }
        $conn->close();

        return $al ;
    }
    public function ModificarOficina($Oficina)
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

        $sql = "UPDATE  Oficina SET  Nom_Oficina ='".$Oficina->getNomOficina()."', Tel_Oficina='".$Oficina->getTelOficina()."' WHERE Id_Oficina='". $Oficina->getIdOficina() ."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function EliminarOficina($Id)
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

        $sql = " DELETE FROM Oficina WHERE  Id_Oficina='".$Id."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }


}

?>