<?php
class UniversityService
{
    public static function DisplayAllDeps($pdo)
    {
        $stmt = $pdo->prepare("SELECT * FROM Departements");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}