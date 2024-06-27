<?php

interface Workable
{
    public function work();
}

interface Eatable
{
    public function eat();
}

class HumanWorker implements Workable, Eatable
{
    public function work()
    {
        // Código para trabajar
    }

    public function eat()
    {
        // Código para comer
    }
}

class RobotWorker implements Workable
{
    public function work()
    {
        // Código para trabajar
    }
}

$humanWorker = new HumanWorker();
$robotWorker = new RobotWorker();

$humanWorker->work();
$humanWorker->eat(); // Tiene sentido para un humano

$robotWorker->work();
// $robotWorker->eat(); // No existe este método, lo cual es correcto porque los robots no comen
