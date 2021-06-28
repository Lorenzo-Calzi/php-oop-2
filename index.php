<?php 

/* Product */
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
/* /Product */


/* User */
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
/* /User */






?>