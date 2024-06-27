<?php

class Employee
{
    private $name;
    private $position;

    public function __construct($name, $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPosition()
    {
        return $this->position;
    }
}

class EmployeeRepository
{
    public function save(Employee $employee)
    {
        // Código para guardar al empleado en la base de datos
    }
}

class EmployeeReportGenerator
{
    public function generate(Employee $employee)
    {
        // Código para generar un reporte del empleado
    }
}

$employee = new Employee("John Doe", "Developer");
$repository = new EmployeeRepository();
$reportGenerator = new EmployeeReportGenerator();

$repository->save($employee);
$reportGenerator->generate($employee);
