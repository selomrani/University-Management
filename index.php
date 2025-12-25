<?php
require_once __DIR__ . '/src/Entity/Department.php';
require_once  'testConnection.php';
$db = new TestConnection();
$pdo = $db->connect();
echo "Please Login to use the app !\n";
$email = readline("email : ");
$password = readline("Password: ");
echo"";
echo "Departements menu :\n";
echo "-------------------\n";
echo "1- Add new departement\n";
echo "2- View all departements\n";
$choice = readline("Enter your choice : ");
switch ($choice) {
    case 1:
        $Depname = readline("Enter department name: ");
        $DepMatiere = readline("Enter department subject: ");
        $Depdesc = readline("Enter department description: ");
        $NewDepartment = new Department($Depname, $DepMatiere, $Depdesc);
        echo $NewDepartment->SaveToDatabase($pdo);
        break;
    case 2:
        echo"You chose 2";
    default :
    $choice = readline("please enter a valid choice : ");
}
