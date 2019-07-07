<?php

class Person
{
    private $name;
    private $email;

    private static $ageLimit = 40;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;

        echo __CLASS__ . ' created <br>';
    }

    public function __destruct()
    {
        echo '<br>' . __CLASS__ . ' destroyed <br>';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public static function getAgeLimit() {
        return self::$ageLimit; // getting a static of the class inside the class itself
    }



}
    # Static props and function
//    echo Person::$ageLimit . '<br>'; // accessing a static property

    echo Person::getAgeLimit() . '<br>';
//    $person1 = new Person('John Doe', 'jdoe@gmail.com');

//    $person1->setName('John Doe');

//    echo $person1->getName();

//    $person1->name = 'John Doe';

//    echo $person1->name;

class Customer extends Person
{

    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email);

        $this->balance = $balance;

        echo 'A new ' . __CLASS__ . ' has been created <br>';
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }


}

$customer1 = new Customer('Claude', 'chclaude@gmail.com', 300);

echo $customer1->getBalance();
