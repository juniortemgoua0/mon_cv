<?php 

class  Skill {

    private int $idOfSkill ;
    private string $title ;
    private  $allSkill  ;
    private $level;

    public function __construct(int $idOfSkill , string $title ,  $allSkill = null , int $level)
    {
        $this->idOfSkill = $idOfSkill ;
        $this->title = $title ;
        $this->allSkill = $allSkill ;
        $this->level = $level ;
    }

    public function getIdOfSkill() : int
    {
        return $this->idOfSkill ;
    }

    public function getTitle() : string 
    {
        return $this->title;
    }


    public function getStringOfAllSkill() : string 
    {   
        $stringOfAllSkill = $this->allSkill[0]->getTitle() ;
        if($this->allSkill != null){

            for($i=1 ; $i < count($this->allSkill) ; $i++){
                $stringOfAllSkill = $stringOfAllSkill . ", " . $this->allSkill[$i]->getTitle() ;
            }
        }
        return $stringOfAllSkill ;
    }

    public function getAllSkill() : array
    {
        return $this->allSkill ;
    }


    public function getLevel() : int
    {
        return $this->level ;
    }

    /**
     * @param $index {int} qui fait reference a l'index de l'element dans le tableau de competence
     *  */ 
    public function getOneElement(int $index) 
    {

     echo '
        <div class="d_personnal" id="'.$index.'" data-bs-toggle="modal" data-bs-target="#exampleModal'.$index.'">
        <span class="check"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-check-lg" viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg></span>
       <div class="details">
        <div class="skill">
            <p class="skill_name">' .$this->getTitle().'</p>
            <span class="star"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg></span>
        </div>
        <p class="lite_gray">'.$this->getStringOfAllSkill().'</p>
        <div class="switcher">
            <div class="switcher_bar" style="width:'.$this->getLevel().'%;"></div>
            <span class="switcher_circle" style="right: ' . 100 -$this->getLevel().'%;"></span>
        </div>
       </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal'.$index.'"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">'.$this->getTitle().'</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body"> ' ;
            
          foreach($this->getAllSkill() as $a){
              echo '
              <div class="d_personnal" id="" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <span class="check"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-check-lg" viewBox="0 0 16 16">
                  <path
                      d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
              </svg></span>
             <div class="details">
              <div class="skill">
                  <p class="skill_name">' .$a->getTitle().'</p>
                  <p class="skill_name"> ( ' .$a->getLevel(). '% )</p>
              </div>
              <div class="switcher">
            <div class="switcher_bar" style="width:'.$a->getLevel().'%;"></div>
            <span class="switcher_circle" style="right: ' . 100 -$a->getLevel().'%;"></span>
        </div>
       </div>

    </div>

              ' ;
          }

          echo '
          </div>
          
        </div>
      </div>
    </div>

  
        ' ;
    }

    public static function getComponent($arrayOfSkill){
       
        for ($i=0 ; $i < count($arrayOfSkill) ; $i++){
            $arrayOfSkill[$i]->getOneElement($i , ) ;
        }

        echo '   <script type="text/javascript">
        $(document).ready(function() {
$(".d_personnal").click((e)=>{
     let id = e.currentTarget.id 
   console.log(id)
})
});       
</script> ' ;
    
        
    }
}


?>

