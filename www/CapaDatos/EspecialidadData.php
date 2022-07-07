<?php
include './CapaEntidades/Especialidad.php';
class EspecialidadData
{
    public function ConsultarEspecialidades()
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

        $sql = "SELECT * FROM Especialidad";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            $al = new Especialidad();
            $al->setIdEspecialidad($row["Id_Especialidad"]);
            $al->setNomEspecialidad($row["Nom_Especialidad"]);
        
       
            $list[] = $al;
        }
          
      
        $conn->close();

        return $list;
    }
    public function InsertarEspecialidad($Especialidad)
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

        $sql = "INSERT INTO Especialidad (Id_Especialidad, Nom_Especialidad) VALUES ('".$Especialidad->getIdEspecialidad()."', '".$Especialidad->getNomEspecialidad()."');";
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function ConsultarEspecialidad($idAl)
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

        $sql = "SELECT * FROM Especialidad WHERE Id_Especialidad='".$idAl."' ";
        $result = $conn->query($sql);

        $al = null;
        if($row = $result->fetch_assoc()) {
            $al = new Especialidad();
            $al->setIdEspecialidad($row["Id_Especialidad"]);
            $al->setNomEspecialidad($row["Nom_Especialidad"]);
            
       
            
        }
        $conn->close();

        return $al ;
    }
    public function ModificarEspecialidad($Especialidad)
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

        $sql = "UPDATE  Especialidad SET  Nom_Especialidad ='".$Especialidad->getNomEspecialidad()."' WHERE Id_Especialidad='". $Especialidad->getIdEspecialidad() ."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function EliminarEspecialidad($id)
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

        $sql = " DELETE FROM Especialidad WHERE  Id_Especialidad='".$id."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }


}

?>