<?php 

class Experience  {

    private $poste ;
    private $entreprise ;
    private $dateDebut ;
    private $dateFin ;
    private $lienSite ;
    private $realisation ;

    
    public function __construct(string $poste , string $entreprise , string $dateDebut , string $dateFin , string $lienSite , string $realisation )
    {
        $this->poste = $poste ;
        $this->entreprise = $entreprise ;
        $this->dateDebut = $dateDebut ;
        $this->dateFin = $dateFin ;
        $this->lienSite = $lienSite ;
        $this->realisation = $realisation ;
    }
    

    public function getPoste() : string
    {
        return $this->poste ; 
    }

    public function getEntreprise() : string 
    {
        return $this->entreprise ; 
    }

    public function getDateDebut() : string
    {
        return Utils::dateFormat($this->dateDebut) ; 
    }

    public function getDateFin() :string
    {
        return Utils::dateFormat($this->dateFin) ; 
    }

    public function getLienSite(){
        return $this->lienSite ; 
    }

    public function getRealisation() : string 
    {
        return $this->realisation ; 
    }

    public function totalWorkTime() : array
    {
       $date1 = date_create_from_format("Y-m-d" , $this->dateDebut);

       $date2 = date_create_from_format("Y-m-d" , $this->dateFin);
       
       $timeOfWork = (array)date_diff($date1 , $date2);
       
       return $timeOfWork;
    }
}
?>