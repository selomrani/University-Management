<?php
class Department
{
    private string $name;
    private string $matiere;
    private string $description;

    public function __construct(string $name, string $matiere, string $description)
    {
        $this->name = $name;
        $this->matiere = $matiere;
        $this->description = $description;
    }

    public function getName(): string { return $this->name; }
    public function getMatiere(): string { return $this->matiere; }
    public function getDescription(): string { return $this->description; }
    
    public function setName(string $name): void
    {
        if (strlen($name) < 2) {
            throw new Exception("Name too short");
        }
        $this->name = $name;
    }
}