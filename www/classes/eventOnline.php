<?php

namespace classes;

class eventOnline extends event{
    private $link;

    /**
     * Class constructor.
     */
    public function __construct($event, \DateTime $date, $price, $link)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    public function register($fullName, $email)
    {
        $this->vacancies += 1;
        $this->setRegister($fullName, $email);
        echo "<p class='trigger'>Show {$fullName}</p>";
    }
}