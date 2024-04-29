<?php
//Conexion a la base de datos
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error en la conexion de la base de datos" .$conn->connect_error);
}
/*
 * Editor server script for DB table usuarios
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$dbname->sql( "CREATE TABLE IF NOT EXISTS `usuarios` (
	`id` int(10) NOT NULL auto_increment,
	`nombre` varchar(255),
	`email` varchar(255),
	`password` varchar(255),
	`rol` varchar(255),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $dbname, 'usuarios', 'id' )
	->fields(
		Field::inst( 'nombre' ),
		Field::inst( 'email' ),
		Field::inst( 'password' ),
		Field::inst( 'rol' )
	)
	->process( $_POST )
	->json();