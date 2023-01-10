<?php
class User
{
    protected $name;
    protected $surname;
    protected $card;
    public $discount;

    public function __construct($name, $surname, $card)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->card = $card;
    }
}
?>