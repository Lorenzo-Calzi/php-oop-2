<?php 

/* PRODUCT */
class Product
{
    public $name;
    public $brand;
    public $price;
    public $description;

    function __construct(string $name, string $brand, float $price, string $description)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->description = $description;
    }
}


/* Category Extends */
class Category extends Product
{
    public $category;

    function __construct(string $name, string $brand, float $price, string $description, string $category)
    {
        parent::__construct($name, $brand, $price, $description);
        $this->category = $category;
    }
}

$oppo = new Category('Find X3 Pro', 'OPPO', 1149.99, 'Lorem ipsum dolor sit amet.', 'Smartphone');
$dyson = new Category('V11 Absolute', 'Dyson', 565.90, 'Lorem ipsum dolor sit amet.', 'Aspirapolvere');
$apple = new Category('Iphone 12 Pro', 'Apple', 1299.99, 'Lorem ipsum dolor sit amet.', 'Smartphone');
$netgear = new Category('Arlo Pro 3', 'netgear', 199.99, 'Lorem ipsum dolor sit amet.', 'Wi-Fi Cam');

/* var_dump($oppo);
var_dump($dyson);
var_dump($oppo);
var_dump($netgear); */

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

    function insertCreditCard($utente, $card){
        

        foreach ($card as $key){
            var_dump($key);
        }
        array_push($utente, $key);
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
$chiara->insertCreditCard($chiara, $mycard);
var_dump($chiara);

$edoardo = new User('Edoardo', 'Strada', 'Dodo', 'edo@example.com');
$edoardo->setSconto(41);
var_dump($edoardo);

$tiziano = new Premium('Tiziano', 'Amati', 'Tizi', 'tizi@example.com', 1);
$tiziano->setSconto(52);
var_dump($tiziano);

$lorenzo = new Premium('Lorenzo', 'Calzi', 'Lo', 'lorenzo@example.com', 3);
$lorenzo->setSconto(21);
var_dump($lorenzo);

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
var_dump($mycard);




?>