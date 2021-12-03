<?php 


class Utils {

    public static function dateFormat(string $date) : string
    {
        $month = "" ;

        if($date == "ce jour"){
            
          return $date ;

        }
        
        $dateParse = date_parse($date);

        switch($dateParse["month"]){
            case 1 :  
                $month = "Janvier" ;
                 break;
            case 2 : 
                $month = "Fevrier" ;
                 break;
            case 3 : 
                $month = "Mars" ;
                break ;
            case 4 : 
                $month = "Avril" ;
                break;
            case 5 : 
                $month = "Mai" ;
                break ;
            case 6 : 
                $month = "Juin" ;
                break ;
            case 7 : 
                $month = "Juillet" ;
                break;
            case 8 : 
                $month = "Aout" ;
                break ; 
            case 9 : 
                $month = "Septembre" ;
                break;
            case 10 : 
                $month = "Octobre" ; 
                break;
            case 11 : 
                $month = "Novembre" ;
                break ;
            case 12 : 
                $month = "Decembre" ;
                break;
            default : 
                die("Invalid month");
                break ;
            
        }

        return $month . " " .$dateParse["year"] ;   
    }

    public static function calculExperience($start , $end , $min , $max){
  
        $date1 = strtotime($start ) ;
        $date2 = strtotime($end) ;
     
        if($date1 < $min){
            $min = $date1 ;
        }
        if($date2 > $max){
            $max = $date2 ;
        }
        
        $value = array("min" => $min , "max" => $max) ;
     
        return $value ;
     
     }
     
     public static function calculEntrepriseExperience( string $dateDebut , string $dateFin) : int
     {
         if($dateFin == "ce jour"){
             $dateFin = date("Y-m-d");
         }
        $start = strtotime($dateDebut) ;
        $end = strtotime($dateFin) ;
     
        $interval = $end - $start ;
        return $interval ;
     }
     
     public static function getTimeOfWork(array $arrayOfInterval , array $arrayOfDate)
       {
        
         $max = max($arrayOfInterval) ;
         
         $index = array_search($max , $arrayOfInterval) ;
     
         $dateOfMaxInterval = $arrayOfDate[$index] ; 
     
         $timeResult = $arrayOfInterval[$index];
     
         $arrayOfDateMaxInterval = explode("/" , $dateOfMaxInterval) ;
     
         $dateStart = $arrayOfDateMaxInterval[0] ;
     
         $dateEnd  = $arrayOfDateMaxInterval[1] ;
         
         $strtotime_debut = strtotime($dateStart);
     
         $strtotime_fin = strtotime($dateEnd);
         
         $resultat = array();
         
         for ($jour = $strtotime_debut; $jour <= $strtotime_fin; $jour += (86400)) 
         {                               
             array_push($resultat , date('d-m-Y', $jour) );
         }
     
         for( $i = 0 ; $i < count($arrayOfDate) ; $i++){
     
            $arrayOfDateInterval  = explode("/" , $arrayOfDate[$i]);
     
            $dateD = explode("-",$arrayOfDateInterval[0]);
            $dateDebut = array($dateD[2] , $dateD[1] , $dateD[0]) ;
            $dateDebut = implode("-", $dateDebut) ;
     
            $dateF = explode("-" , $arrayOfDateInterval[1]) ;
            $dateFin = array($dateF[2] , $dateF[1] , $dateF[0]) ;
            $dateFin = implode("-", $dateFin) ;
     
            if(in_array($dateDebut , $resultat) and in_array($dateFin , $resultat)){

            }else if(in_array($dateDebut , $resultat) and !in_array($dateFin , $resultat)){
     
             $timeResult +=(strtotime($dateFin) - $strtotime_fin);
     
            }else if(!in_array($dateDebut , $resultat) and in_array($dateFin , $resultat)){
     
             $timeResult +=($strtotime_debut  - strtotime($dateDebut));
     
            }else{


     
              $timeResult += $arrayOfInterval[$i] ;
            //   echo "bonsoir" ;
     
            }

         }
     
         
         return round($timeResult/(60*60*24*365)) ;
     
     }

}



?>