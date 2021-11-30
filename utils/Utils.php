<?php 


class Utils {

    public static function dateFormat(string $date) : string
    {
        $month = "" ;

        if($date == "ce jour "){

          $month = $date;
          return $month ;

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
                $mont = "Juin" ;
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

    public static function getTotalExperienceTime() : string
    {
        
       return "";
    }

}



?>