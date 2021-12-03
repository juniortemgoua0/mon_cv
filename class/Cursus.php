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


    /**
     * @param $length {int} qui represente la taille du tableau comprenant tous les elements a charger 
     * @param $lastValue {int} qui represente l'index de chaque element du tableau
     * TODO : affiche chaque element en prenant le soin de ne pas mettre de <hr> sur le dernier element 
     */
    public function getOneElement(int $length , int $lastValue) 
    {

     echo '
     <div class="profession">
     <p class="title">'. $this->getDiplome() .'- <span class="location">'.$this->getEcoleObtention().'</span></p>
     <p class="date_cursus_role"> <span class="date">' .$this->getDateObtention() .' -
         </span> &nbsp; <span class="cursus_role">'. $this->getSpecialisation() .'</span> </p>
         ';
         
    if($length > $lastValue){
        echo '<hr>' ;
    }

    echo ' </div>
     ' ;
    }

    /**
     * @param $arraOfCursus {array} represente le tableau contenant la totalite des elements devant etre afficher
     * par ce composant 
     *  */ 
    public static function getComponent(array $arrayOfCursus){
        echo '
        <div class="cursus card">

        <div class="header">
          <div class="header_information">
            <img src="img/casquette-noire-pour-etudiant-diplome.png" alt="">
            <div class="header_info">
                <h3 class="header_title">Cursus academique</h3>
                <p class="header_subtitle lite_gray">Diplomes et formations
                    certifiantes</p>
            </div>
        </div>

        <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg></span>

        </div>

       <div class="curcus_main">
        <div class="scroll"></div>
        <div class="professional_experience_scroll">
        ' ;
        $index = 0 ;
         foreach($arrayOfCursus as $a){
             $a->getOneElement( count($arrayOfCursus)-1 , $index) ;
           $index++;
         } 

        echo '
        </div>

        </div>
    </div>
        ';
    }

}

?>