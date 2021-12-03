<?php 

class Experience  {

    private $poste ;
    private $entreprise ;
    private $dateDebut ;
    private  $dateFin ;
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
        return $this->dateDebut ;
    }

    public function getDateFin() : string
    {
        return $this->dateFin ;
    }

    public function getDateDebutFormater() : string
    {
        return Utils::dateFormat($this->dateDebut) ; 
    }


    public function getDateFinFormater() :string
    {
        return Utils::dateFormat($this->dateFin ) ; 
    }

    public function getLienSite(){
        return $this->lienSite ; 
    }

    public function getRealisation() : string 
    {
        return $this->realisation ; 
    }

    public function getOneElement(int $length , int $index){

        echo '
        <div class="profession">
        <p class="title"> '.$this->getPoste().' - <span class="location"> '. $this->getEntreprise().'</span></p>
        <p class="date">  De '. $this->getDateDebutFormater(). ' a ' . $this->getDateFinFormater(). ' - ' . $this->getLienSite()  . '</p>
        <p class="subtitle">' . $this->getRealisation() . '</p>
        ';
         
    if($length > $index){
        echo '<hr>' ;
    }

    echo ' </div>
     ' ;

    }

    public static function getComponent( array $experience){


        $arrayOfInterval = array() ; 
        $arrayOfDate = array() ;

        foreach($experience as $e){
            
            $dateFin = $e->getDateFin() ;
            if($dateFin == "ce jour"){
            $dateFin = date("Y-m-d");
            }
            $arrayToDateDebutAndFin = array($e->getDateDebut() , $dateFin) ;
            $implodeDate = implode("/" , $arrayToDateDebutAndFin ) ;
            array_push($arrayOfDate , $implodeDate) ; 

            array_push($arrayOfInterval , Utils::calculEntrepriseExperience($e->getDateDebut(), $e->getDateFin())) ;

        }
  
$timeOfWork = Utils::getTimeOfWork($arrayOfInterval ,$arrayOfDate) ;
        echo '
        <div class="professional_experience card">
        <div class="header">
            <div class="header_information">
                <img src="img/batiment.png" height="40" width="40" alt="">
                <div class="header_info">
                    <h3 class="header_title">Experience professionnelle( ' . $timeOfWork .'ans)</h3>
                    <p class="header_subtitle lite_gray">Expertise en entreprise</p>
                </div>
            </div>
    
            <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg></span>
    
        </div>
    
        <div class="professional_experience_main ">
            <div class="scroll"></div>
            <div class="professional_experience_scroll">
        ' ;
        $index = 0;
        foreach( $experience as $a ){
             $a->getOneElement(count($experience)-1 , $index) ;
             $index++;
        }

        echo ' 
           </div>
          </div>
        </div>
        ' ; 
        
    }

    
}
?>