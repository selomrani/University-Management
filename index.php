<?php
require_once __DIR__ . '/src/Entity/Department.php';
require_once 'testConnection.php';
require_once 'src/Service/UniversityService.php';

$db = new TestConnection();
$pdo = $db->connect();

while (true) {
    echo "\n--- University Management ---\n";
    echo "1- Add new departement\n";
    echo "2- View all departements\n";
    echo "3- Update a department\n";
    echo "4- Delete a departement\n";
    echo "0- Exit\n";
    
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case 1:
            $name = readline("Name: ");
            $subj = readline("Subject: ");
            $desc = readline("Description: ");
            $dept = new Department($name, $subj, $desc);
            echo UniversityService::saveDepartment($pdo,$dept) . "\n";
            break;

        case 2:
            echo "\n--- List of Departments ---\n";
            $departments = UniversityService::DisplayAllDeps($pdo);
            foreach ($departments as $d) {
                echo "[ID: {$d['id']}] Name: {$d['name']} | Subject: {$d['matiere']}\n";
            }
            break;

        case 3:
            $id = readline("Enter ID to update: ");
            $newName = readline("New Name: ");
            $newSubj = readline("New Subject: ");
            echo UniversityService::UpdateDept($pdo, $id, $newName, $newSubj, $newDesc) . "\n";
            break;

        case 0:
            exit("Goodbye!\n");

        default:
            echo "Invalid choice, try again.\n";
    }
}