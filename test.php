<?php
require_once __DIR__ . '/src/Entity/Department.php';
require_once  'testConnection.php';
$db = new TestConnection();
$pdo = $db->connect();

$Depname = readline("Enter department name: ");
$DepMatiere = readline("Enter department subject: ");
$Depdesc = readline("Enter department description: ");
$NewDepartment = new Department($Depname, $DepMatiere, $Depdesc);
echo $NewDepartment->SaveToDatabase($pdo);