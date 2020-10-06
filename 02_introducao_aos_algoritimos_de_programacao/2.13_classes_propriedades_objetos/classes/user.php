<?php 

class User{
    private $firstName;
    public $lastName;
    public $email;

    
    /**
     * Obter o valor da propriedade first name
     *
     * @return void
     */   
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * Definir o valor da propriedade first name
     *
     * @param [type] $firstName
     * @return void
     */  
    public function setFirstName(string $firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Obter o valor da propriedade last name
     *
     * @return void
     */
    public function getLastName()
    {
        return $this->lastName;
    }

   /**
    * Definir o valor da propriedade last name
    *
    * @param [type] $lastName
    * @return void
    */
    public function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Obter o valor da propriedade email
     *
     * @return void
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Definir o valor da propriedade email
     *
     * @param [type] $email
     * @return void
     */
    public function setEmail($email){        
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
            return true;
        }else{
            $this->email = null;
            return false;
        }

        return $this;
    }
}