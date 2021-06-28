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
    public $eta;
    public $sconto = 0;

    function setSconto($eta) {
        if($eta > 40) {
            $this->sconto = 10;
        }
    }

    function __construct(string $name, string $lastname, string $nickname, string $email, int $eta)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->nickname = $nickname;
        $this->email = $email;
        $this->eta = $eta;
    } 
}

/* Premium Extends */
class Premium extends User
{
    public $discount;

    function __construct(string $name, string $lastname, string $nickname, string $email, int $eta, int $discount)
    {
        parent::__construct($name, $lastname, $nickname, $email, $eta);
        $this->discount = $discount;
    }
}



$chiara = new User('Chiara', 'Liporata', 'Lipo', 'chiara@example.com', 19);
$edoardo = new User('Edoardo', 'Strada', 'Dodo', 'edo@example.com', 41);
var_dump($chiara);
var_dump($edoardo);


$tiziano = new Premium('Tiziano', 'Amati', 'Tizi', 'tizi@example.com', 52, 15);
$lorenzo = new Premium('Lorenzo', 'Calzi', 'Lo', 'lorenzo@example.com', 21, 40);
var_dump($tiziano);
var_dump($lorenzo);

/* /USER */


?>