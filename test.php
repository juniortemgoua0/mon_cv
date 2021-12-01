
<?php

function calculExperience($start , $end , $min , $max){
  
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

function calculEntrepripriseExperience( string $dateDebut , string $dateFin) : int
{
   $start = strtotime($dateDebut) ;
   $end = strtotime($dateFin) ;

   $interval = $end - $start ;
   return $interval ;
}

function calculMaxInterval(array $arrayOfInterval , array $arrayOfDate) : float
  {
   
    $max = 0 ;
    
    $index = 0 ;

    foreach($arrayOfInterval as $i => $value){

       if($value >= $max){

           $index = $i ;

       }
    }

    $dateOfMaxInterval = $arrayOfDate[$index] ; 

    $timeResult = $arrayOfInterval[$index];

    $arrayOfDateMaxInterval = explode("/" , $dateOfMaxInterval) ;

    $dateDebut = $arrayOfDateMaxInterval[0] ;

    $dateFin  = $arrayOfDateMaxInterval[1] ;
    
    $strtotime_debut = strtotime($dateDebut);

    $strtotime_fin = strtotime($dateFin);
    
    $resultat = array();
    
    for ($jour = $strtotime_debut; $jour <= $strtotime_fin; $jour += (86400)) 
    {                               
        array_push($resultat , date('d-m-Y', $jour) );
    }

    for( $i = 0 ; $i < count($arrayOfDate) ; $i++){

       $arrayOfDateInterval  = explode("/" , $arrayOfDate[$i]);

       $dateDebut = $arrayOfDateInterval[0];

       $dateFin = $arrayOfDateInterval[1] ;

       if(in_array($dateDebut , $resultat)==true && in_array($dateFin , $resultat)==true){
          
       }else if(in_array($dateDebut , $resultat) == true && in_array($dateFin , $resultat) == false){

        $timeResult +=strtotime($dateFin) - $strtotime_fin;

       }else if(in_array($dateDebut , $resultat) == false && in_array($dateFin , $resultat) == true){

        $timeResult +=$strtotime_debut  - strtotime($dateDebut);

       }else{

        $timeResult += $arrayOfInterval[$i] ;

       }
    }

    return  $timeResult/31536000 ;

}

//  var_dump(calculExperience("2001-01-01" , "2002-01-01" , 0 , 0)) ;

$debut = '29-09-2021';
$fin = '06-10-2021';
$resultat = array();
$strtotime_debut = strtotime($debut);
$strtotime_fin = strtotime($fin);
for ($aujourdhui = $strtotime_debut; $aujourdhui <= $strtotime_fin; $aujourdhui += (86400)) 
{                               
   array_push($resultat , date('d-m-Y', $aujourdhui) ) ;
}
echo var_dump($resultat);

?>
