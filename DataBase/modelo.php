<?php
/*
class DB{

    function __construct() {
        $this->pdo = new PDO(
            "mysql:host=".DB_HOST.";dbname=".DB_NAME, 
        DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        //Metodo query
        function select ($sql, $data=null) {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($data);
            return $this->stmt->fetchAll();
        }

        //Metodo insert
        function insert($sql, $data=null) {
            $this->stmt = $this->pdo->prepare($sql);
            return $this->stmt->execute($data);
        }


        //Metodo destructor
        function __destruct () {
            if ($this->stmt!==null) { $this->stmt = null; }
            if ($this->pdo!==null) { $this->pdo = null; }
        }
}


// Database settings

define("DB_HOST", "localhost");
define("DB_NAME", "plaza_de_comidas");
define("DB_USER", "root");
define("DB_PASSWORD", "");

$_DB = new DB();*/

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "plaza_de_comidas";

        // Crear una conexión a la base de datos
    
        $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }
        
?>

<?php
/*
// Definir los datos de conexión
$host = "localhost";
$port = 5432;
$database = "plaza_comidas";
$user = "postgres";
$password = "nico1216";



$conn = pg_connect("host=localhost dbname=plaza_comidas user=postgres password=nico1216");
//$nombres = pg_query($conexion, "SELECT nombre_usuario FROM usuario");

if (!$conn) {
    die("Error de conexión: " . pg_last_error());
}
else{
echo "";

while ($row = pg_fetch_assoc($nombres)) {

    echo "Nombre: " . $row['nombre_usuario'] . "\n";
}
}
pg_close($conn);
*/
?>
