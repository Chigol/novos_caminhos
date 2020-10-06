<?php

namespace classes;

use classes\address;
use classes\event;
use DateTime;

class eventLive extends event{    

    /**
     * @var address
     */
    private $address;
    
    public function __construct($event, DateTime $date, $vacancies, $address, $price)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }

    /**
     * @return address
     */

     public function getAddress(){
         return $this->address;
     }
}