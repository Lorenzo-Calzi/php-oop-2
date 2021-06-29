<?php 

/* PRODUCT */
class Category
{
    public $category;

    public function __construct(string $category) {
        $this->category = $category;
    }
}


class Product extends Category
{
    public $name;
    public $brand;
    public $price;
    public $description;

    function __construct(string $category, string $name, string $brand, float $price, string $description)
    {
        parent::__construct($category);
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->description = $description;
    }
}


$oppo = new Product('Smartphone', 'Find X3 Pro', 'OPPO', 1149.99, 'Lorem ipsum dolor sit amet.');
$dyson = new Product('Aspirapolvere', 'V11 Absolute', 'Dyson', 565.90, 'Lorem ipsum dolor sit amet.');
$apple = new Product('Smartphone', 'Iphone 12 Pro', 'Apple', 1299.99, 'Lorem ipsum dolor sit amet');
$netgear = new Product('Wi-Fi Cam', 'Arlo Pro 3', 'netgear', 199.99, 'Lorem ipsum dolor sit amet.');

var_dump($oppo);
var_dump($dyson);
var_dump($apple);
var_dump($netgear);

/* /PRODUCT */



/* USER */
class User
{
    public $name;
    public $lastname;
    public $nickname;
    public $email;
    public $sconto = 0;

    function __construct(string $name, string $lastname, string $nickname, string $email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->nickname = $nickname;
        $this->email = $email;
    } 

    function setSconto($eta) {
        if($eta > 40) {
            $this->sconto = 10;
        }
    }

    function insertCreditCard($card){
    
        foreach ($card as $key){
            /* echo($key); */
        }
    }


}

/* Premium Extends */
class Premium extends User
{
    public $level;

    function __construct(string $name, string $lastname, string $nickname, string $email, int $level)
    {
        parent::__construct($name, $lastname, $nickname, $email);
        $this->level = $level;
    }

    function setSconto($eta) {
        if($eta > 40) {
            $this->sconto = 20;
        } else{
            $this->sconto = $this->level *10;
        }
    }
}



$chiara = new User('Chiara', 'Liporata', 'Lipo', 'chiara@example.com');
$chiara->setSconto(19);
/* var_dump($chiara); */

$edoardo = new User('Edoardo', 'Strada', 'Dodo', 'edo@example.com');
$edoardo->setSconto(41);
/* var_dump($edoardo); */

$tiziano = new Premium('Tiziano', 'Amati', 'Tizi', 'tizi@example.com', 1);
$tiziano->setSconto(52);
/* var_dump($tiziano); */

$lorenzo = new Premium('Lorenzo', 'Calzi', 'Lo', 'lorenzo@example.com', 3);
$lorenzo->setSconto(21);
/* var_dump($lorenzo); */

/* /USER */


/* CREDIT CARD */
class CrediCard
{
    public $nameCard;
    public $deadline;
    public $cvc;

    function __construct(int $nameCard, int $deadline, int $cvc)
    {
        $this->nameCard = $nameCard;
        $this->deadline = $deadline;
        $this->cvc = $cvc;
    }
}

$mycard = new CrediCard(10325568, 101221, 437);
/* var_dump($mycard); */


$chiara->insertCreditCard($mycard);
?>