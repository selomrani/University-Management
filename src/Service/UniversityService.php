<?php
class UniversityService
{
    public static function saveDepartment(PDO $pdo, Department $dept): string
    {
        $stmt = $pdo->prepare("INSERT INTO Departements (name, matiere, description) VALUES (?, ?, ?)");
        $stmt->execute([
            $dept->getName(),
            $dept->getMatiere(),
            $dept->getDescription()
        ]);
        return "Department saved successfully";
    }
    public static function displayAllDeps(PDO $pdo): array
    {
        $stmt = $pdo->prepare("SELECT * FROM Departements");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function UpdateDept(PDO $pdo, $id, $newName, $newSubj, $newDesc): void
    {
        $stmt = $pdo->query("UPDATE departements SET name = :name, matiere = :matiere, description = :description WHERE id = :id");
        $stmt->execute([
            ':name' => $newName,
            ':matiere' => $newSubj,
            ':description' => $newDesc,
            ':id' => $id
        ]);
    }
}
