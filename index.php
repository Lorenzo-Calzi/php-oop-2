<?php 

/* PRODUCT */
class Product
{
    public $name;
    public $brand;
    public $price;

    function __construct(string $name, string $brand, float $price)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
    }
}


/* Category Extends */
class Category extends Product
{
    public $category;

    function __construct(string $name, string $brand, float $price, string $category)
    {
        parent::__construct($name, $brand, $price);
        $this->category = $category;
    }
}


$oppo = new Product('Find X3 Pro', 'OPPO', 1149.99);
$apple = new Category('Iphone 12 Pro', 'Apple', 1299.99, 'Smartphone');

var_dump($oppo);
var_dump($apple);

/* /PRODUCT */



/* USER */
class User
{
    public $name;
    public $lastname;
    public $nickname;
    public $email;

    function __construct(string $name, string $lastname, string $nickname, string $email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->nickname = $nickname;
        $this->email = $email;
    }
}

/* Premium Extends */
class Premium extends User
{
    public $discount;

    function __construct(string $name, string $lastname, string $nickname, string $email, int $discount)
    {
        parent::__construct($name, $lastname, $nickname, $email);
        $this->discount = $discount;
    }
}


$chiara = new User('Chiara', 'Liporata', 'Lipo', 'clipo@example.com');
$lorenzo = new Premium('Lorenzo', 'Calzi', 'Lo', 'lorenzo@example.com', 20);

var_dump($chiara);
var_dump($lorenzo);

/* /USER */


?>