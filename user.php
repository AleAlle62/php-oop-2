<?php

class User
{
    // trait 
    use Loggable;

    protected $name;
    protected $surname;
    protected $expirationDate;
    public $discount;

    public function __construct($name, $surname, $expirationDate)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->expirationDate = $expirationDate;
    }

    public function isExpired() {
        $now = new DateTime('now');
    
        $expiration = DateTime::createFromFormat('m/y', $this->expirationDate);
        $interval = $now->diff($expiration);
        return $interval->invert != 1;
    }
}
?>