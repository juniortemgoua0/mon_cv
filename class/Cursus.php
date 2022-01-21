<?php 
class Cursus  {



    public function __construct(private string $diplome  ,private string $ecoleObtention ,private string $dateObtention ,private string $specialisation)
    {
    }
    
    public function getDiplome(){
        return $this->diplome ;   
    }

    public function getEcoleObtention(){
        return $this->ecoleObtention ;   
    }

    public function getDateObtentionFormater(){
        return Utils::dateFormat($this->dateObtention) ;
    }

    public function getDateObtention(){
        return $this->dateObtention ;
    }

    public function getSpecialisation(){
        return $this->specialisation ;   
    }


    /**
     * @param int $length  qui represente la taille du tableau comprenant tous les elements a charger 
     * @param int $lastValue  qui represente l'index de chaque element du tableau
     * TODO : affiche chaque element en prenant le soin de ne pas mettre de <hr> sur le dernier element 
     */
    public function getOneElement(int $length , int  $index) 
    {

     echo '
     <div class="profession">
     <p class="title"> <span class="CursusDiplome'.$index.'">'. $this->getDiplome() .'</span>- <span class="location CursusEcoleObtention'.$index.'">'.$this->getEcoleObtention().'</span></p>
     <p class="date_cursus_role"> <span class="date CursusDateObtention'.$index.'">' .$this->getDateObtentionFormater() .' -
         </span> &nbsp; <span class="cursus_role CursusSpecialisation'.$index.'">'. $this->getSpecialisation() .'</span> </p>
         ';
         
    if($length > $index){
        echo '<hr>' ;
    }

    echo ' </div>
     ' ;
    }

    /**
     * @param array $arraOfCursus  represente le tableau contenant la totalite des elements devant etre afficher
     * par ce composant 
     *  */ 
    public static function getComponent(array $arrayOfCursus){
        echo '
        <div class="cover_editable_btn"></div>
        <a href="#" class="editable_btn"><i class="bi bi-pencil-fill"></i> </a>
        <div class="header">
          <div class="header_information">
            <img src="img/casquette-noire-pour-etudiant-diplome.png" alt="">
            <div class="header_info">
                <h2 class="header_title">Cursus academique</h2>
                <p class="header_subtitle lite_gray">Diplomes et formations
                    certifiantes</p>
            </div>
        </div>

        <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white"
                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg></span>

        </div>

       <div class="curcus_main ">
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
 
        ';
    }

}

?>