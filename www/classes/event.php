<?php

namespace classes;

use DateTime;

class event{
    private $event;
    private $date;
    private $price;
    private $register;
    protected $vacancies;

    /**
     * Class constructor.
     */
    public function __construct($event, \DateTime $date, $price, $vacancies){
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($fullName, $email){
        if($this->vacancies >= 1){
            $this->vacancies -= 1;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        }else{
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram.</p>";
        }
    }

    /**
     * Get the value of register
     */ 
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Set the value of register
     *
     * @return  self
     */ 
    public function setRegister($fullName, $email)
    {
        $this->register = [
            "name" => $fullName,
            "email" => $email
        ];
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return number_format($this->price, "2", ",", ".");
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date->format("d/m/Y H:i");
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of event
     */ 
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set the value of event
     *
     * @return  self
     */ 
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }
}