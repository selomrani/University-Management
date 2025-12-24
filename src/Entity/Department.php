<?php
require_once './testConnection.php';
class Department
{
    private $name;
    public $matiere;
    public $description;
    public function __construct($name, $matiere, $description)
    {
        $this->name = $name;
        $this->matiere = $matiere;
        $this->description = $description;
    }
    public function SaveToDatabase($pdo)
    {
        $stmt = $pdo->prepare("INSERT INTO Departements (name, matiere, description) VALUES (?, ?, ?)");
        $stmt->execute([$this->name, $this->matiere, $this->description]);
        return "Department saved successfully";
    }
    public function getName()
    {
        return $this->name;
    }
    public function getMatiere()
    {
        return $this->matiere;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setName($name)
    {
        if (strlen($name) < 2) {
            return "Name too short";
        } else {
            $this->name = $name;
            return true;
        }
    }
    public function display()
    {
        return "Name: " . $this->name . ", Matiere: " . $this->matiere . ", Description: " . $this->description;
    }
}
