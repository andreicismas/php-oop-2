<?php

class CreditCard
{
    private $userCard;
    private $cardNumber;

    private $noValidCard;

    public function __construct($user, $dateValidation)
    {
        $this->userCard = $user;
        $this->cardNumber = rand(1, 1000000000);

        $this->setExpiration($dateValidation);
    }

    public function getAccountHolder()
    {
        return $this->userCard;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setExpiration($value)
    {
        $cardDate = date_create_from_format("m/Y", $value);
        $curentDate = new DateTime();

        if ($cardDate < $curentDate) {
            throw new Exception("Carta di credito scaduta");
        }else{

            $this->noValidCard = $cardDate;
        }
    }

    public function getExpiration()
    {
        return date_format($this->noValidCard, "m/Y");
    }
}