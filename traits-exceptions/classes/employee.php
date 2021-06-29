<?php

class Employee extends User
{
    use AddWork, Message;

    public $level;

    public function __construct($name, $email, $sconto, $level) {
        parent::__construct($name, $email, $sconto);
        $this->level = $level;
    }

    public function setLivello($livello) {
        $this->livello = $livello;
    }
}

$employee = [
    new Employee('Lorenzo', 'lorenzo@example.com', 10, 2),
    new Employee('Chiara', 'chiara@example.com', 15, 1),
    new Employee('Carmen', 'carmen@example.com', 5, 3)
];

/* var_dump($employee); */

/* try {
    echo multiplication('ciao');
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage(); 
} */

?>