<?php 

class Cursus  {

    private $diplome ;
    private $ecoleObtention ;
    private $dateObtention ;
    private $specialisation ;

    public function __construct(string $diplome  , string $ecoleObtention , string $dateObtention , string $specialisation)
    {
        $this->diplome = $diplome ;
        $this->ecoleObtention = $ecoleObtention ;
        $this->dateObtention = $dateObtention ;
        $this->specialisation = $specialisation ;
    }
    
    public function getDiplome(){
        return $this->diplome ;   
    }

    public function getEcoleObtention(){
        return $this->ecoleObtention ;   
    }

    public function getDateObtention(){
        return Utils::dateFormat($this->dateObtention) ;
    }

    public function getSpecialisation(){
        return $this->specialisation ;   
    }

}

?>