<?php
try 
{
	$con = new PDO("mysql:host=localhost:3306;dbname=banco_patinhas",
                   "root", "root");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) 
{
    echo 'ERRO: ' . $e->getMessage();
}
?>