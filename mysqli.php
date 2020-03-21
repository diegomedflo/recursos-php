//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//1. 
//CONEXION CON LA BASE DE DATOS METODO POO//
$mysqli = new mysqli("localhost", "root", "password", "my_database");
 //SE RECOMIENDA CONVERTIR LOS DATOS EXTRAIDOS, EN CARACTERES UTF8
$mysqli->set_charset("utf8");

// VERIFICACIÓN DE CONEXIÓN CON BD
if (mysqli_connect_errno()) {
    printf("Falló la conexión con la base de datos.", $mysqli->connect_error);
    exit();
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//2.
//EJECUCION DE QUERYS MYSQL DESDE PHP
$query="INSERT INTO formulario (precio, certificacion_ip) VALUES ($rpta1, $rpta2)";
$mysqli->query($query);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//3.
//EXTRAER DATOS DE LA BASE DE DATOS PARA SU MANIPULACIÓN
//Se extrae la tabla o tupla en forma de diccionario y para acceder a cada dato, debe ejecutar el nombre de la columna como la llave
//as $key, corresponde a cada fila y al combinarlo con {'column'} se obtiene un dato.
$query = "SELECT * FROM smartphones_peru ORDER BY precio_ml ASC;";
$result = $mysqli->query($query);
foreach ($result as $key) {
	$bd1=$key{'precio_ml'}; /*COLUMNA DEL PRECIO*/
	$bd2=$key{'certificacion_ip'}; /*COLUMNA DE CERTIFICACIÓN IP*/
	$bd3=$key{'diseño_huella'}; /*COLUMNA DE HUELLA DIGITAL*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
