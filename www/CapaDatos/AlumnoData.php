<?php
include './CapaEntidades/Alumno.php';
class AlumnoData
{
    public function ConsultarAlumnos()
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

        $sql = "SELECT * FROM Alumno";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            $al = new Alumno();
            $al->setIdAlumno($row["Id_Alumno"]);
            $al->setDirAlumno($row["Dir_Alumno"]);
            $al->setGrpAlumno($row["Grp_Alumno"]);
            $al->setNomAlumno($row["Nom_Alumno"]);
            $al->setTelAlumno($row["Tel_Alumno"]);
       
            $list[] = $al;
        }
          
      
        $conn->close();

        return $list;
    }
    public function InsertarAlumno($alumno)
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

        $sql = "INSERT INTO alumno (Id_Alumno, Nom_Alumno, Dir_Alumno, Tel_Alumno, Grp_Alumno) VALUES ('".$alumno->getIdAlumno()."', '".$alumno->getNomAlumno()."', '".$alumno->getDirAlumno()."', '".$alumno->getTelAlumno()."', '".$alumno->getGrpAlumno()."');";
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function ConsultarAlumno($idAl)
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

        $sql = "SELECT * FROM Alumno WHERE Id_Alumno='".$idAl."' ";
        $result = $conn->query($sql);

        $al = null;
        if($row = $result->fetch_assoc()) {
            $al = new Alumno();
            $al->setIdAlumno($row["Id_Alumno"]);
            $al->setDirAlumno($row["Dir_Alumno"]);
            $al->setGrpAlumno($row["Grp_Alumno"]);
            $al->setNomAlumno($row["Nom_Alumno"]);
            $al->setTelAlumno($row["Tel_Alumno"]);
       
            
        }
        $conn->close();

        return $al ;
    }
    public function ModificarAlumno($alumno)
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

        $sql = "UPDATE  alumno SET  Nom_Alumno ='".$alumno->getNomAlumno()."', Dir_Alumno ='".$alumno->getDirAlumno()."', Tel_Alumno='".$alumno->getTelAlumno()."', Grp_Alumno= '".$alumno->getGrpAlumno()."' WHERE Id_Alumno='". $alumno->getIdAlumno() ."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }
    public function EliminarAlumno($id)
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

        $sql = " DELETE FROM alumno WHERE  Id_Alumno='".$id."'";
        
        $conn->query($sql);

         
        $conn->close();

        
    }


}

?>