<?php 

class User
{
    public $name;
    public $email;
    public $sconto = 0;

    public function __construct($name, $email, $sconto) {
    
        $this->name = $name;
        $this->email = $email;
        $this->sconto = $sconto;
    }

    public function setSconto($eta)
    {
        if($eta > 18) {
            $this->sconto = 10;
        }
    }

    function multiplication($int) {
        if (!is_int($int)) {
            throw new Exception('Is not a number');
        }
        return $int*5;
    }
}


/* Traits */
trait AddWork {
    protected $work = 'Web Developer'; 

    public function getWork()
    {
        return $this->work;
    }
}

trait Message{
    protected $message = 'Hi Booleaner';

    function getMessage()
    {
        return $this->message;
    }
}


?>